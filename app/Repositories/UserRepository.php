<?php

namespace App\Repositories;

use App\User;

class UserRepository {
    public function latestUsers($count) {
        $users = User::all();
        $users = $users->sortByDesc('created_at');
        $users = $users->take($count);
  
        return $users;
      }
}