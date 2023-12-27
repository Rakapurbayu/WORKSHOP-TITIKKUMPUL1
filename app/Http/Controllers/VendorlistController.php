<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class VendorlistController extends Controller
{
    /**
     * Display the properties view.
     *
     * @return \Illuminate\View\View
     */
    // public function ListVendor()
    // {
    //     $reservasis = Reservasi::with('user')->get();
    //     return view('pages.vendorlist', ['title' => 'Pesan Tempat', 'reservasis' => $reservasis]);
    // }


    // public function ListVendor()
    // {
    //     $reservasis = DB::table('reservasi')->select('ID_RESERVASI as id_reservasi', 'ID_USER', 'ID_PROMO', 'ID_RESTORAN', 'TANGGAL_RESERVASI', 'WAKTU_RESERVASI', 'JUMLAH_ORANG')->get();
    //     return view('pages.vendorlist', ['title' => 'Pesan Tempat', 'reservasis' => $reservasis]);
    // }

    public function ListVendor()
    {
        $reservasis = DB::table('reservasi')
            ->join('user', 'reservasi.ID_USER', '=', 'user.ID_USER')
            ->select('reservasi.id_reservasi', 'reservasi.id_user', 'user.username', 'reservasi.tanggal_reservasi', 'reservasi.waktu_reservasi', 'reservasi.jumlah_orang')
            ->get();

        return view('pages.vendorlist', ['title' => 'Pesan Tempat', 'reservasis' => $reservasis]);
    }



    public function VLdestroy($id)
    {
        $reservasi = DB::table('reservasi')->where('ID_RESERVASI', $id);
        $tes = $reservasi->delete();
        if ($tes) {
            return redirect()->route('ListVendor')->with('success', 'BERHASIL !');
        }
    }
}
