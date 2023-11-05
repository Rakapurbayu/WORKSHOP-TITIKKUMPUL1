<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    /**
     * Display the properties view.
     *
     * @return \Illuminate\View\View
     */
    public function Register()
    {
        return view('pages.login.login',['title' => 'Login']);
    }

    public function Login()
    {
        return view('pages.login.signup',['title' => 'Register']);
    }

}
