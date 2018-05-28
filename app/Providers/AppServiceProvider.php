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

        // Student snippet list
        View::composer('pages.users.users-students-small-snippet-list', function ($view) {
            $users = new \App\Repositories\UserRepository;
            $view->with('users', $users->latestUsers(4, 1));
        });

        // Schools snippet list
        View::composer('pages.users.users-schools-small-snippet-list', function ($view) {
            $users = new \App\Repositories\UserRepository;
            $view->with('users', $users->latestUsers(4, 2));
        });

        // Companies and Organizations snippet list
        View::composer('pages.users.users-companies-small-snippet-list', function ($view) {
            $users = new \App\Repositories\UserRepository;
            $view->with('users', $users->latestUsers(4, 3));
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
