<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 06.11.2019
 * Time: 14:21
 */

namespace App\Providers\PageBuilders;


use App\Services\PageBuildServices\MenuBuildService;
use Carbon\Laravel\ServiceProvider;

class PageBuilder extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('getMenuByType', MenuBuildService::class);
    }
}
