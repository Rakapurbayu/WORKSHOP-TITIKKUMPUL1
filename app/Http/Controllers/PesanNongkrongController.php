<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PesanNongkrongController extends Controller
{
    /**
     * Display the properties view.
     *
     * @return \Illuminate\View\View
     */
    public function PesanNongkrong()
    {
        return view('pages.pemesanan.pesannongkrong',['title' => 'Pesan Tempat Nongkrong']);
    }
}
