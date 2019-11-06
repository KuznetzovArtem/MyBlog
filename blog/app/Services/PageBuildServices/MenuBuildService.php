<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 06.11.2019
 * Time: 14:35
 */

namespace App\Services\PageBuildServices;


use App\BlogEntities\Menu;
use Illuminate\Support\Facades\DB;

class MenuBuildService
{
    public function getMenuByType($type)
    {
        return Menu::where('name', '=', $type);
    }
}
