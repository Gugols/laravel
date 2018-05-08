<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Footer articles

        View::composer('pages.posts.posts-small-snippet-list', function ($view) {
            $posts = new \App\Repositories\PostRepository;
            $view->with('posts', $posts->latestPosts(3));
        });

        View::composer('pages.users.users-small-snippet-list', function ($view) {
            $users = new \App\Repositories\UserRepository;
            $view->with('users', $users->latestUsers(4));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
