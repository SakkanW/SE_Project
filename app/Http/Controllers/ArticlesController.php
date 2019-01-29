<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ArticlesRequest;

class ArticlesController extends Controller {

	

	public function create()
	{
	  return view('articles.input');
	}
  
	public function index(ArticlesRequest $request){
	  $create = new Article;
	  $create->title = $request->input('title');
	  $create->url = $request->input('url');
	  $create->body = $request->input('body');
		$create->published_at = Carbon::now();
		if($request->hasFile('image'))
		{
			$image_filename = $request->file('image')->getClientOriginalName();
			$image_name = date("Ymd-His-").$image_filename;
			$public_path = 'images/articles/';
			$destination = base_path()."/public/".$public_path;
			$request->file('image')->move($destination,$image_name);
			$create->image = $public_path.$image_name;
		}
		$create->status = $request->input('status');
  //    $create->published_at = $request->input('fname');
	  $create->save();
  
	  return redirect()->to('/show');
  
	}
  
  
	  public function show(){
		$articles = Article::orderBy('id', 'desc')->get();
		return view('articles.show', compact('articles'));
	  }
  
  
	  public function edit($id)
	  {
		$articles = Article::find($id);
		return view('articles.edit')->with('articles',$articles);
	  }
  
	  public function update($id, ArticlesRequest $request)
	  {
		  $update = Article::find($id);
		  $update->title = $request->input('title');
		  $update->url = $request->input('url');
			$update->body = $request->input('body');
			if($request->hasFile('image'))
			{
				$image_filename = $request->file('image')->getClientOriginalName();
				$image_name = date("Ymd-His-").$image_filename;
				$public_path = 'images/articles/';
				$destination = base_path()."/public/".$public_path;
				$request->file('image')->move($destination,$image_name);
				$create->image = $public_path.$image_name;
			}
			$update->status = $request->input('status');
		  $update->save();
  
		  return redirect()->to('/show');
	  }
  
	  public function destroy($id)
	  {
		  $destroy = Article::where('id',$id)->delete();
		  return redirect()->back();
		}
		

		


}
