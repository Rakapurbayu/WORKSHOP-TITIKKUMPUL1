<?php

namespace App\Http\Controllers;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JokopiController extends Controller
{
    public function JokopiVendor(Request $request)
    {
        // Ambil data dari form yang disubmit
        $inputData = $request->all();

        // Simpan data ke dalam model Reservasi
        $reservasi = new Reservasi();
        $reservasi->tanggal_reservasi = $inputData['tanggal_reservasi']; // Ganti nama_kolom1 sesuai dengan nama kolom di tabel Reservasi
        $reservasi->waktu_reservasi = $inputData['waktu_reservasi']; // Ganti nama_kolom2 sesuai dengan nama kolom di tabel Reservasi
        $reservasi->jumlah_orang = $inputData['jumlah_orang']; // Ganti nama_kolom1 sesuai dengan nama kolom di tabel Reservasi
        // Lanjutkan sampai semua kolom terisi

        // Simpan data
        $reservasi->save();

        return view('pages.jokopi', ['title' => 'Jokopi SUB']);
    }
}
