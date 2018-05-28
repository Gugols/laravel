<?php

namespace App\Repositories;

use App\User;

class UserRepository {
    public function latestUsers($count, $type = false) {
        // $users = User::where('profile_type', 1);
        // $users = $users->sortByDesc('created_at');
        // $users = $users->take($count);

        if($type == false) {
            $users = User::all();
            $users = $users->sortByDesc('created_at', 'desc');
            $users = $users->take($count);
            return $users;
        }

        $users = User::where('profile_type', $type)
               ->orderBy('id', 'desc')
               ->take(4)
               ->get();
  
        return $users;
      }
}