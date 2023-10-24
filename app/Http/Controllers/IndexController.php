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
        return view('pages.index');
    }



    /**
     * Display the about view.
     *
     * @return \Illuminate\View\View
     */
    public function TentangKami()
    {
        return view('pages.about');
    }
}
