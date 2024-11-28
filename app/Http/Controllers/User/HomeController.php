<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function about(){
        return view('users.about');
    }

    public function security(){
        return view('users.security');
    }

    public function environnement(){
        return view('users.environnement');
    }

    public function transport(){
        return view('users.transport');
    }

    public function negoce(){
        return view('users.negoce');
    }

}
