<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Role extends Middleware
{
    public function handle($request, Closure $next, ... $roles)
    {
        $user = Auth::user();

        foreach($roles as $role) {
            // Check if user has the role This check will depend on how your roles are set up
            if($user->role == $role){
                return $next($request);
            }
        }

        return redirect('login');
    }
}