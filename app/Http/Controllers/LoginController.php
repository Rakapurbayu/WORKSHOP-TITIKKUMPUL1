<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    /**
     * Display the properties view.
     *
     * @return \Illuminate\View\View
     */
    public function Login()
    {
        return view('pages.login.login',['title' => 'Login']);
    }
}
