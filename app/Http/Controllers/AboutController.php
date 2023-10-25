<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function TentangKami()
    {
        return view('pages.about' ,['title' => 'Tentang Kami']);
    }
}
