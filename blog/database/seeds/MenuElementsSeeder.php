<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 01.11.2019
 * Time: 18:07
 */

class MenuElementsSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        try {
            $this->seedForPublicMenu();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    protected function getMenuItemByType($type)
    {
        $menu = \Illuminate\Support\Facades\DB::table('menu')
            ->where('name', '=', $type)->get();
        if ($menu->isNotEmpty()) {
            return $menu->first()->id;
        }
        throw new Exception("No menu with type $type.");
    }

    /**
     * This function set base elements for
     * public menu.
     * @throws Exception
     */
    protected function seedForPublicMenu()
    {
        $menuId = $this->getMenuItemByType('public');

        \Illuminate\Support\Facades\DB::table('menu_items')->insert([
            'display_name' => 'about',
            'url' => '/about',
            'item_number' => 1,
            'menu_id' => $menuId
        ]);
        \Illuminate\Support\Facades\DB::table('menu_items')->insert([
            'display_name' => 'contact',
            'url' => '/contact',
            'item_number' => 3,
            'menu_id' => $menuId
        ]);
        $subMenuId = $this->getMenuItemByType('development');
        \Illuminate\Support\Facades\DB::table('menu_items')->insert([
            'display_name' => 'development',
            'url' => '/development',
            'item_number' => 2,
            'menu_id' => $menuId,
            'parent_menu_id' => $subMenuId
        ]);
        \Illuminate\Support\Facades\DB::table('menu_items')->insert([
            'display_name' => 'php',
            'url' => '/development/php',
            'item_number' => 1,
            'menu_id' => $subMenuId,
        ]);
        \Illuminate\Support\Facades\DB::table('menu_items')->insert([
            'display_name' => 'docker',
            'url' => '/development/docker',
            'item_number' => 2,
            'menu_id' => $subMenuId
        ]);
        \Illuminate\Support\Facades\DB::table('menu_items')->insert([
            'display_name' => 'management',
            'url' => '/management',
            'item_number' => 4,
            'menu_id' => $menuId
        ]);
        \Illuminate\Support\Facades\DB::table('menu_items')->insert([
            'display_name' => 'life',
            'url' => '/life',
            'item_number' => 5,
            'menu_id' => $menuId
        ]);
    }

    /**
     * This function set base elements for
     * admin menu.
     */
    protected function seedForAdminMenu()
    {

    }
}
