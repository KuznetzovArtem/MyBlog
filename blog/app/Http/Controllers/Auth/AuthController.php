<?php


namespace App\Http\Controllers\Auth;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    use AuthenticatesUsers,RegistersUsers,ThrottlesLogins;


}
