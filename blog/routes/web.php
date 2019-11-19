<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

\Illuminate\Support\Facades\Route::group(['middleware' => ['admin', 'can:viewAdminPanel'], 'prefix' => 'admin' , 'as' => 'see-admin-panel'], function () {
    \Illuminate\Support\Facades\Route::any('/', ['uses' => 'AdminController@showView']);
});

\Illuminate\Support\Facades\Route::any('/',
    [
        'as' => 'home',
        'uses' => 'Main@main'
    ]
);
\Illuminate\Support\Facades\Route::get('/login-admin',     [
    'as' => 'LoginForAdmin',
    'uses' => 'LoginController@loginView'
]);

\Illuminate\Support\Facades\Route::post('/login-admin', 'LoginController@loginAdmin');


