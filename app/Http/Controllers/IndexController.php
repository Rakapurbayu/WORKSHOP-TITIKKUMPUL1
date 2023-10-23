<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
    public function PesanNongkrong()
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
