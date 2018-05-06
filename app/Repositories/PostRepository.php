<?php

namespace App\Repositories;

use App\Post;

class PostRepository {
    public function latestPosts($count) {
        $posts = Post::all();
        $posts = $posts->sortByDesc('created_at');
        $posts = $posts->take($count);
  
        return $posts;
      }
}