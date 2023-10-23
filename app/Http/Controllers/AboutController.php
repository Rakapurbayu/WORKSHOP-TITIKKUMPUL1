<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\AboutModel;

class LessonController extends Controller
{
    public function index()
    {
        $data = LessonModel;
        return view('/about');
    }
}
