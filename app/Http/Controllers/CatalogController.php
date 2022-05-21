<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function show(Request $request) {
        dd($request);
    }

    public function create(Request $request) {
        return view('catalog_create');
    }
}
