<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class PesanMakanController extends Controller
{
    /**
     * Display the properties view.
     *
     * @return \Illuminate\View\View
     */
    public function PesanMakan()
    {
        return view('pages.pemesanan.makan',['title' => 'Pesan Makan']);
    }
}
