<?php

namespace App\Http\Controllers;

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
		return view('menus');
	}

	public function create() {
		
		return view("add-menu");
			
	}


	public function store(Request $request) {
		
		$this->validate($request,[
			'name' => 'required'
		]);

		return "success";

	}


}
