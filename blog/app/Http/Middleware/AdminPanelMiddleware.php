<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Auth\Access\Gate;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Auth;

class AdminPanelMiddleware extends Middleware
{
    protected $polices;
    /**
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @param mixed ...$guards
     * @return \Illuminate\Http\RedirectResponse|mixed
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::guest()) {
            return redirect()->route('LoginForAdmin');
        }
        \Illuminate\Support\Facades\Gate::define('viewAdminPanel', 'App\Policies\Admin\AdminPanelPolicy@view');
        return parent::handle($request, $next, $guards);
    }
}
