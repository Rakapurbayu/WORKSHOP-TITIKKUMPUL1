<?php

namespace App\Http\Controllers;


use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class JokopiController extends Controller
{
    public function index()
    {
        return view('pages.jokopi', ['title' => "Jokopi"]);
    }

    public function create(Request $request)
{


    }


   /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {


    //     try {
    //         $request->validate([
    //             'JUMLAH_ORANG' => 'required|numeric|min:1',
    //             'TANGGAL_RESERVASI' => 'required|date',
    //             'WAKTU_RESERVASI' => 'required',
    //         ]);

    //         $data = new Reservasi();
    //         $data->ID_USER = AUTH::id();
    //         $data->JUMLAH_ORANG = $request->input('JUMLAH_ORANG');
    //         $data->TANGGAL_RESERVASI = $request->input('TANGGAL_RESERVASI');
    //         $data->WAKTU_RESERVASI = $request->input('WAKTU_RESERVASI');
    //        $tes =  $data->save();

    //        dd($tes);
    //         return redirect()->route('ListPemesanan')->with('success', 'Reservasi berhasil');
    //         } catch (\Exception $e) {
    //             // Log the exception for further investigation
    //             \Log::error($e);

    //             return view('peges.jokopi',['error'=>$e->getMessage()]);
    //         }


    // }

    public function store(Request $request)
{
    try {
        $request->validate([
            'JUMLAH_ORANG' => 'required|numeric|min:1',
            'TANGGAL_RESERVASI' => 'required|date',
            'WAKTU_RESERVASI' => 'required',
        ]);

        $data = new Reservasi();
        $data->ID_USER = auth()->id(); // Menggunakan auth() untuk mendapatkan ID pengguna yang terotentikasi
        $data->JUMLAH_ORANG = $request->input('JUMLAH_ORANG');
        $data->TANGGAL_RESERVASI = $request->input('TANGGAL_RESERVASI');
        $data->WAKTU_RESERVASI = $request->input('WAKTU_RESERVASI');
        $tes = $data->save();

        // Redirect ke route ListPemesanan setelah berhasil menyimpan reservasi
        return redirect()->route('ListPemesanan')->with('success', 'Reservasi berhasil');
    } catch (\Exception $e) {
        // Log kesalahan untuk investigasi lebih lanjut
        \Log::error($e);

        // Tampilkan halaman dengan pesan kesalahan jika terjadi error
        return view('pages.jokopi', ['error' => $e->getMessage()]);
    }
}


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Request $edit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }


    // $data = new Reservasi();
    // $data->ID_USER = Auth::id();
    // $data->JUMLAH_ORANG = $request->input('jumlah_orang');
    // $data->TANGGAL_RESERVASI = $request->input('tanggal');
    // $data->WAKTU_RESERVASI = $request->input('jam');
    // $data->save();

    // return 'berhasil';

    //     return redirect()->route('ListPemesanan')->with('success', 'Reservasi berhasil');
    // }
}
