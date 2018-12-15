<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    //
	
	public function __construct() {
		
	}
	
	public function get($id) {
		//$post = Post::find($id);
		
		$post = Post::where('id','>','1001')
		              ->where('location','Noida')->get();
		
		return $post;
	}
	
	public function all() {
		
		//Step 1: get data from database
		$posts = Post::all();

		
		//Step 2: pass it to view
		$view_data = view('Posts.postlist',with(compact('posts')));
		
		//Step 3: pass it back to client
		return $view_data;

	}
	
	public function edit($id) {
		
	}
	
	public function create(Request $request) {
		
	}
}
