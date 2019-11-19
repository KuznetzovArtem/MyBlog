<?php

use App\User;
use Illuminate\Support\Facades\Hash;

/**
 * Created by PhpStorm.
 * User: black
 * Date: 01.11.2019
 * Time: 18:07
 */

class UserSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $superAdminRole = \App\BlogEntities\Role::where('type', '=', RoleSeeder::RoleSuperAdmin)->first();
        User::create([
            'name' => 'admin',
            'email' => 'blackofblackoff@gmail.com',
            'phone' => '89120557282',
            'role' => $superAdminRole->id,
            'password' => Hash::make('artem424720'),
        ]);
    }
}
