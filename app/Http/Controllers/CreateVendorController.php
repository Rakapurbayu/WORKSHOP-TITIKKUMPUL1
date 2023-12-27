<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class CreateVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.createvendor', ['title' => "CreateVendor"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi data yang masuk jika diperlukan
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'description' => 'required|string',
        'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
    ]);

    // Mengambil data dari formulir dan menyimpannya dalam model Vendor
    $vendor = new Vendor();
    $vendor->title = $validatedData['title'];
    $vendor->city = $validatedData['city'];
    $vendor->description = $validatedData['description'];

    // Menyimpan gambar ke dalam direktori (contoh: /public/images)
    $imagePath = $request->file('image_path')->store('images', 'public');
    $vendor->image_path = $imagePath;

    // Menyimpan data ke dalam database
    $vendor->save();

    // Redirect ke halaman yang sesuai atau kirim respons sesuai kebutuhan
    return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
