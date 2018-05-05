<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;

class postController extends Controller
{

    public function index() {
      
      //$posts = Post::paginate(10);
      //$posts = $posts->sortByDesc('created_at');

      $posts = Post::orderBy('created_at', 'desc')->paginate(10);

      //dd($posts);

      return view('pages.posts.all-posts')->with([
          'posts'=>$posts,
          ]);
    }

    public function create() {
		  return view('pages.posts.create-post');
    }

    public function store(Request $request) {
//dd($request);
            	// Means validate request with this specific rules.
    	$this->validate(request(), [
    		'title' => 'required',
        'body'	=> 'required',
        ]);
        
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = Auth::id();
        //$path = Storage::putFile('uploads/post_images', $request->file('avatar'));
        //Storage::disk('uploads')->put('/post_images/'.$user->getId() . ".jpg", $avatar_file);
        if($request->file('image')) {
          $path = $request->file('image')->store('public/uploads/post_images');
          $post->image = $request->image->hashName();
        }
        $post->save();

          //Create a new post using the request data . saving it to the database and then redirect.
        //return redirect('/posts/new');
        return redirect()->route('posts.show', ['id' => $post->id]);

    }

    public function show($id) {
      $post = Post::find($id);
      return view('pages.posts.show-post', ['post'=>$post]);
    }

    public function edit($id) {
      $post = Post::find($id);
      $this->authorize('update', $post);
      return view('pages.posts.edit-post')->with(['post'=>$post]);
    }

    public function update(Request $request, $id)
    {
      $this->validate(request(), [
    		'title' => 'required',
    		'body'	=> 'required'
        ]);
        
        $post = Post::find($id);
        $this->authorize('update', $post);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        // dd($request->file('image'));
        if($request->file('image')) {
          $path = $request->file('image')->store('public/uploads/post_images');
          $post->image = $request->image->hashName();
        }
        $post->save();

          //Create a new post using the request data . saving it to the database and then redirect.
        //return redirect('/posts/new');
        return redirect()->route('posts.show', ['id' => $post->id]);
    }

  
    public function destroy($id)
    {
      $post = Post::find($id);
      Post::destroy($id);
      return redirect()->route('posts.show', ['id' => 50]);
    }
}