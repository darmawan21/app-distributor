<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangTambahRequest;
use App\Models\Barang;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();

        return view('pages.barang', [
            'barangs' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.barang-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(/** BarangTambahRequest $request*/)
    {
        // Barang::create($request->all());
        // return redirect()->route('pages.barang');

        // Request()->validate([
        //     'keterangan' => 'required|max:255',
        //     'nama_barang' => 'required|max:255',
        //     'ukuran' => 'required|max:255',
        //     'spesifikasi' => 'required|max:255',
        //     'jumlah_bal' => 'required|integer',
        //     'jumlah_lbr' => 'required|integer',
        //     'jumlah_total' => 'required|integer',
        // ]);
    }

    public function insert()
    {
        Request()->validate([
            'keterangan' => 'required|max:255',
            'nama_barang' => 'required|max:255',
            'ukuran' => 'required|max:255',
            'spesifikasi' => 'required|max:255',
            'jumlah_bal' => 'required|integer',
            'jumlah_lbr' => 'required|integer',
            'jumlah_total' => 'required|integer',
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
