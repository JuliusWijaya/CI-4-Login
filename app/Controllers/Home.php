<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('auth/login', 
        [
            'config' => config('Auth'),
        ]);
        //return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }
    
   
}