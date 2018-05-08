<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Repositories\PostRepository;
use App\User;
use App\Post;

class LandingController extends Controller
{

    public function index(PostRepository $posts) {

        $latest_posts = $posts->latestPosts(3);
        $all_users_count = User::all()->count();
        $all_posts_count = Post::all()->count();

        return view('pages.landing')->with([
            'auth_user'=>Auth::user(),
            'posts'=>$latest_posts,
            'all_users_count'=>$all_users_count,
            'all_posts_count'=>$all_posts_count
            ]);
    }

}