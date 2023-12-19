<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class ListPemesananController extends Controller
{
    /**
     * Display the properties view.
     *
     * @return \Illuminate\View\View
     */
    public function ListPemesanan()
    {
       $reservasis= DB::table('reservasi')->get();
        return view('pages.pemesanan.listpemesanan',['title' => 'Pesan Tempat','reservasis'=>$reservasis]);
    }
}
