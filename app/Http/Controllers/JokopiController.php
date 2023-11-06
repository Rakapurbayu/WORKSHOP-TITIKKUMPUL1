<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JokopiController extends Controller
{
    public function Jokopi(Request $request)
    {
        return view('pages.jokopi', ['title' => "Jokopi"]);
    }

    public function Form(Request $request)
    {

        $data = new Reservasi();
        $data->ID_USER = 1;
        $data->JUMLAH_ORANG = $request->input('jumlah_orang');
        $data->TANGGAL_RESERVASI = $request->input('tanggal');
        $data->WAKTU_RESERVASI = $request->input('jam');
        $data->save();

        return 'berhasil';

        // Simpan data ke dalam model Reservasi
        // Reservasi::create([
        //     'jumlah_orang' => $request->input('jumlah_orang'),
        //     'tanggal' => $request->input('tanggal'),
        //     'jam' => $request->input('jam'),
        //     // Sesuaikan dengan kolom lain di database
        // ]);

        return redirect()->route('ListPemesanan')->with('success', 'Reservasi berhasil');
    }
}
