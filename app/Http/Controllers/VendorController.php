<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class JokopiController extends Controller
{
    public function vendor()
    {
        return view('jokopi'); // Mengembalikan view jokopi.blade.php
    }
}

