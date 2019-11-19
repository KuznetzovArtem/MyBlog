<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 06.11.2019
 * Time: 14:35
 */

namespace App\Services\PageBuildServices;

use App\BlogEntities\Menu;

class MenuBuildService
{
    /**
     * @param $type
     * @return mixed|Menu
     */
    public function getMenuByType($type)
    {
        $menu = Menu::where('name', '=', $type)->first();
        $items = $menu->getItems();
        foreach ($items as $item) {
            $item->initSubItems();
        }

        return $items;
    }

}
