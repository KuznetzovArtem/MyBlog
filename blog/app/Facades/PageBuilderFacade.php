<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 05.11.2019
 * Time: 19:40
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class PageBuilderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'getMenuByType';
    }
}
