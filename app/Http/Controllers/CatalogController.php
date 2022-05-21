<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('catalog.create');
    }

    public function show(Request $request) {
        dd($request);
    }

}
