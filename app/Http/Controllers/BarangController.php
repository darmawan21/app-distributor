<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.barang');
    }
}
