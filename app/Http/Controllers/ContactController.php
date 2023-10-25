<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    /**
     * Display the contact view.
     *
     * @return \Illuminate\View\View
     */
    public function KontakKami()
    {
        return view('pages.contact',['title' => 'Kontak kami']);
    }
}
