<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Http\Requests;
use Illuminate\Http\Request;

class MenuController extends Controller
{
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	* Show the application dashboard.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$menus = Menu::paginate(10);
		return view('menus',compact('menus'));
	}

	public function create() {
		
		return view("add-menu");
			
	}


	public function store(Request $request) {
		
		$this->validate($request,[
			'name' => 'required'
		]);

		$menu = new Menu;
		$menu->name = $request->input('name');
		if($menu->save()) {
			return redirect('menus');
		}

	}

	public function edit($id) {

		$menu = Menu::find($id);
		return view("edit-menu",compact('menu'));
			
	}

	public function save(Request $request) {
		
		$this->validate($request,[
			'name' => 'required'
		]);

		$id = $request->input('id');
		$name = $request->input('name');

		$menu = Menu::find($id);
		$menu->name = $name;
		if($menu->save()) {
			return redirect('menus');
		}
		

	}

	public function delete($id) {
		
		$res = array();		

		$menu = Menu::find($id);

		if($menu->delete()) {
			$response['status'] = 1;
		} else {
			$response['status'] = 0;
		}

		return response()->json($response);
	}


}
