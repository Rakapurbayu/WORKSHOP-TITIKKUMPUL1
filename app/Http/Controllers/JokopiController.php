<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JokopiController extends Controller
{
    public function JokopiVendor()
    {
        return view('pages.jokopi', ['title' => 'Jokopi SUB']);
    }
}
