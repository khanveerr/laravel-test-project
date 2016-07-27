<?php

namespace App\Http\Controllers;

use App\Article;
use App\Menu;
use App\Http\Requests;
use Illuminate\Http\Request;

class ArticleController extends Controller
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
		$articles = Article::paginate(10);
		return view('articles',compact('articles'));
	}

	public function create() {

		$menus = Menu::select('id','name')->get();
		return view("add-article", compact('menus'));
			
	}


	public function store(Request $request) {
		
		$this->validate($request,[
			'menu' => 'required|not_in:0',
			'title' => 'required',
			'description' => 'required',
			'tags' => 'required'
		]);

		$article = new Article;
		$article->menu_id = $request->input('menu');
		$article->title = $request->input('title');
		$article->description = $request->input('description');
		$article->tags = $request->input('tags');

		if($article->save()) {
			
			$title = strtolower($request->input('title'));
			$titleWithOutSpace = explode(" ",$title);
			$link = implode("-",$titleWithOutSpace);
			$link = $article->id."-".$link;

			$article = Article::find($article->id);
			$article->link = $link;
			$article->save();

			return redirect('articles');
		}

	}

	public function edit($id) {

		$article = Article::find($id);
		$menus = Menu::select('id','name')->get();
		return view("edit-article",compact('article','menus'));
			
	}


	public function save(Request $request) {
		
		$this->validate($request,[
			'menu' => 'required|not_in:0',
			'title' => 'required',
			'description' => 'required',
			'tags' => 'required'
		]);

		$article = Article::find($request->input('id'));
		$article->menu_id = $request->input('menu');
		$article->title = $request->input('title');
		$article->description = $request->input('description');
		$article->tags = $request->input('tags');

		if($article->save()) {
			
			$title = strtolower($request->input('title'));
			$titleWithOutSpace = explode(" ",$title);
			$link = implode("-",$titleWithOutSpace);
			$link = $article->id."-".$link;

			$article = Article::find($article->id);
			$article->link = $link;
			$article->save();

			return redirect('articles');
		}

	}

	public function delete($id) {
		
		$res = array();		

		$article = Article::find($id);

		if($article->delete()) {
			$response['status'] = 1;
		} else {
			$response['status'] = 0;
		}

		return response()->json($response);
	}


}
