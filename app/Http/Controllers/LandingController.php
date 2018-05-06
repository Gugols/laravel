<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Repositories\PostRepository;

class LandingController extends Controller
{

    public function index(PostRepository $posts) {

        $latest_posts = $posts->latestPosts(3);

        return view('pages.landing')->with([
            'auth_user'=>Auth::user(),
            'posts'=>$latest_posts,
            ]);
    }

}