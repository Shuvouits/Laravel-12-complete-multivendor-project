<?php

/** check user has permission */
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


/** set sidebar active */

if(!function_exists('setActive')) {
    function setActive( array $routes, $activeClass = 'active' ) : string
    {
        return request()->routeIs($routes) ? $activeClass : '';
    }
}
