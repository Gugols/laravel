<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // Reset cached roles and permissions
                app()['cache']->forget('spatie.permission.cache');


                // create regular user permissions
                Permission::create(['name' => 'edit own posts']);
                Permission::create(['name' => 'delete own posts']);
                Permission::create(['name' => 'publish own posts']);
                Permission::create(['name' => 'unpublish own posts']);
                Permission::create(['name' => 'create donation']);

                // create moderator permissions
                Permission::create(['name' => 'edit all posts']);
                Permission::create(['name' => 'delete all posts']);
                Permission::create(['name' => 'publish all posts']);
                Permission::create(['name' => 'unpublish all posts']);
                Permission::create(['name' => 'warn users']);
                Permission::create(['name' => 'ban users']);
                Permission::create(['name' => 'edit users']);
                Permission::create(['name' => 'delete all comments']);
                Permission::create(['name' => 'edit all cards']);

                // array of 
                $regular_user_permissions = [
                    'edit own posts',
                    'delete own posts',
                    'publish own posts',
                    'unpublish own posts',
                    'create donation'
                ];

                $moderator_permissions = [
                    'edit all posts',
                    'delete all posts',
                    'publish all posts',
                    'unpublish all posts',
                    'warn users',
                    'ban users',
                    'edit users',
                    'delete all comments',
                    'edit all cards',
                ];

                $admin_permissions = [
                    'manage_roles',
                ];

        
                // create roles and assign created permissions
        
                $role = Role::create(['name' => 'regular user']);
                $role->givePermissionTo($regular_user_permissions);
         
        
                $role = Role::create(['name' => 'moderator']);
                //$role->givePermissionTo($regular_user_permissions);
                //$role->givePermissionTo($moderator_permissions);
        
                $role = Role::create(['name' => 'admin']);
                $role->givePermissionTo(Permission::all());
            }
    }
