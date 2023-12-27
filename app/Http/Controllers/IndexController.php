<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display the homepage view with vendor data.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        $createv = $this->card(); // Fetch vendor data
        
        // Pass vendor data to the 'pages.index' view
        return view('pages.index', [
            'title' => "TitikKumpul, berkumpul ria dengan TitikKumpul",
            'createv' => $createv,
        ]);
    }

    /**
     * Fetch vendor data.
     *
     * @return \Illuminate\Support\Collection
     */
    public function card()
    {
        return DB::table('createvendor')->get();
    }
}

