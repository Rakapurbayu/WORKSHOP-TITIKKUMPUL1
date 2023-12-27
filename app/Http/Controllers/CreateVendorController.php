<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        'address' => 'required|string|max:255',
        'description' => 'required|string',
        'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
    ]);

    // Mengambil data dari formulir dan menyimpannya dalam model Vendor
    $createVendor = new CreateVendor();
        $createVendor->title = $request->input('title');
        $createVendor->city = $request->input('city');
        $createVendor->address = $request->input('address');
        $createVendor->description = $request->input('description');
        // Handle image upload and storage

        // Save the vendor details
        $createVendor->save();

        // Redirect to the page displaying the list of vendors
        return redirect()->route('jokopi.index'); // Replace 'jokopi.index' with your actual route name
        Log::info('Received form data:', $request->all());

    // ... rest of the code

    // Saving to database
    try {
        $createVendor->save();
    } catch (\Exception $e) {
        Log::error('Error saving data: ' . $e->getMessage());
        // Handle the error appropriately
    }
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
