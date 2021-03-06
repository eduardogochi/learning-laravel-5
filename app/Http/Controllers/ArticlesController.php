<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller {


	public function __construct(){
		//$this->middleware('auth','only'=>'create');
	}


	public function index()
	{

		$articles = Article::latest('published_at')->published()->get();

		return view('articles.index',compact('articles'));
	}

	public function show($id)
	{
		$article = Article::findOrFail($id);
		
		return view('articles.show',compact('article'));
	}

	public function create()
	{
		return view('articles.create');
	}

	/**
	 * [store description]
	 * @param  ArticleRequest
	 * @return [type]
	 */
	public function store(ArticleRequest $request)
	{
		$article = new Article($request->all());

		Auth::user()->articles()->save($article);

		return redirect('articles');
	}


	public function edit($id)
	{

		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}


	public function update($id, ArticleRequest $request)
	{
		$article = Article::findOrFail($id);

		$article->update($request->all());

		return redirect('articles');
	}

}