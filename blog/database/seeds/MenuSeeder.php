<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 01.11.2019
 * Time: 18:07
 */

class MenuSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('menu')->insert([
            'name' => 'public'
        ]);
        \Illuminate\Support\Facades\DB::table('menu')->insert([
            'name' => 'admin'
        ]);
        \Illuminate\Support\Facades\DB::table('menu')->insert([
            'name' => 'development'
        ]);
    }
}
