<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 06.11.2019
 * Time: 11:59
 */

namespace App\Http\Controllers;


use App\Events\Articles\AddArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class TestController extends Controller
{
    public function mainTestingProvider()
    {
        $user = Auth::user();
        Event::fire(new AddArticle('test', $user));
    }
}
