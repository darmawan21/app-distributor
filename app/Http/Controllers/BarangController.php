<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;

class BarangController extends Controller
{

    public function __construct()
    {
        $this->BarangModel = new BarangModel();
    }

    public function index()
    {
        $data = [
            'barang'=> $this->BarangModel->allData(),
        ];
        return view('pages.barang', $data);
    }
}
