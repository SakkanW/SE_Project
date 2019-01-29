<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller {

	public function	showNews()
	{
		  $articles = Article::orderBy('id', 'desc')->get();
		  return view('articles.shownisit', compact('articles'));
	}

}
