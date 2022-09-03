<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $role = Auth::user()->role; 
        switch ($role) {
            case 'admin':
            return '/admin_dashboard';
            break;
            case 'seller':
            return '/seller_dashboard';
            break; 

            default:
            return '/home'; 
            break;
        }
    }
}
