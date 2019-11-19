<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public const RoleSuperAdmin = 'SuperAdmin';
    public const RoleHR = 'HR';
    public const RoleGuest = 'Guest';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\BlogEntities\Role::create([
            'type' => 'SuperAdmin'
        ]);
        \App\BlogEntities\Role::create([
            'type' => 'Guest'
        ]);
        \App\BlogEntities\Role::create([
            'type' => 'HR'
        ]);
    }
}
