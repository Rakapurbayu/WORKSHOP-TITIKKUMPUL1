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

    public function create()
{

    $request->validate([
        'jumlah_orang' => 'required|numeric|min:1',
        'tanggal' => 'required|date',
        'jam' => 'required',
    ]);

    try {
        $data = new Reservasi();
        $data->ID_USER = Auth::id();
        $data->JUMLAH_ORANG = $request->input('jumlah_orang');
        $data->TANGGAL_RESERVASI = $request->input('tanggal');
        $data->WAKTU_RESERVASI = $request->input('jam');
        $data->save();

        return redirect()->route('ListPemesanan')->with('success', 'Reservasi berhasil');
        } catch (\Exception $e) {
            // Log the exception for further investigation
            \Log::error($e);

            return redirect()->route('ListPemesanan')->with('error', 'Terjadi kesalahan. Mohon coba lagi.');
        }
    }


   /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(examp $examp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(examp $examp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, examp $examp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(examp $examp)
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
