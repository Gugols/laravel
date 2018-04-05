<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        //$this->call(UsersTableSeeder::class);
        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->assignRole('regular user');

            $u->posts()->save(factory(App\Post::class)->make());
            $u->posts()->save(factory(App\Post::class)->make());
            $u->posts()->save(factory(App\Post::class)->make());
        });

    }
}