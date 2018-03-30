<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;

class postController extends Controller
{
    public function create() {
		  return view('pages.posts.create-post');
    }

    public function store(Request $request) {

            	// Means validate request with this specific rules.
    	$this->validate(request(), [
    		'title' => 'required',
    		'body'	=> 'required'
        ]);
        
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = Auth::id();
        //$post->body = request(['body']);
        $post->save();

          //Create a new post using the request data . saving it to the database and then redirect.
		    return redirect('/posts/new');

    }

    public function show($id) {
      $post = Post::find($id);
      return view('pages.posts.show-post', ['post'=>$post]);
    }



  
    public function destroy($id)
    {
        //dd($id);
        // delete
        //$post = Post::find($id);
        Post::destroy($id);
        //$post->delete();
    }
}
