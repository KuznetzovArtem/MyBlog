<?php

namespace App\Http\Controllers;

use App\BlogEntities\Articles;
use App\BlogEntities\Menu;
use App\BlogEntities\MenuItems;
use App\Facades\PageBuilderFacade;
use App\Services\PageBuildServices\MenuBuildService;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    protected $menuBuildService;

    public function __construct(MenuBuildService $buildService)
    {
        $this->menuBuildService = $buildService;
    }

    public function main()
    {

        $menu = PageBuilderFacade::getMenuByType('public');

        $data = [
            'title' => 'Just Blog',
            'menu' => $menu
        ];
        return view('public.main', $data);
    }
}
