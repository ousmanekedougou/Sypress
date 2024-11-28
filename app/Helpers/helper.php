<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('user_page_title')) {
    function user_page_title($title)
    {
        $base_title = 'Sypress';
        if ($title === '') {
            return  $base_title;
        } else {
            return $base_title . ' | ' . $title;
        }
    }
}


if (!function_exists('set_active_roote')) {
    function set_active_roote($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}
