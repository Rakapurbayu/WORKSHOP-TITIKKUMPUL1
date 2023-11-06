<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ListPemesananController extends Controller
{
    /**
     * Display the properties view.
     *
     * @return \Illuminate\View\View
     */
    public function ListPemesanan()
    {
        return view('pages.pemesanan.listpemesanan',['title' => 'Pesan Tempat']);
    }
}
