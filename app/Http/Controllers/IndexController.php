<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display the homepage view.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('index');
    }

    /**
     * Display the properties view.
     *
     * @return \Illuminate\View\View
     */
    public function properties()
    {
        return view('properties');
    }

    /**
     * Display the about view.
     *
     * @return \Illuminate\View\View
     */
    public function TentangKami()
    {
        return view('about');
    }

    /**
     * Display the contact view.
     *
     * @return \Illuminate\View\View
     */
    public function KontakKami()
    {
        return view('contact');
    }
}

/**Trying to push, that's why I make this statement */
