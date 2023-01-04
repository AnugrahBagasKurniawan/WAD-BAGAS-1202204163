<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\showroom;

class tambahmobil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ListCar-Bagas');
    }

    public function tampil(){
        $showroom = showroom::latest()->get();
        return view('ListCar-Bagas', compact('showroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Add-Bagas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // showroom::create([
        //     'nama_mobil' => $request->nama_mobil,
        //     'pemilik_mobil' => $request->pemilik_mobil,
        //     'merk_mobil' => $request->merk_mobil,
        //     'tanggal_beli' => $request->tanggal_beli,
        //     'deskripsi' => $request->deskripsi,
        //     'foto_mobil' => $request->foto_mobil,
        //     'status_pembayaran' => $request->status_pembayaran,
        // ]);

        $nm = $request->foto_mobil;
        $namafile = $nm->getClientOriginalName();

            $dtUpload = new showroom;
            $dtUpload->nama_mobil = $request->nama_mobil;
            $dtUpload->pemilik_mobil = $request->pemilik_mobil;
            $dtUpload->merk_mobil = $request->merk_mobil;
            $dtUpload->tanggal_beli = $request->tanggal_beli;
            $dtUpload->deskripsi = $request->deskripsi;
            $dtUpload->foto_mobil = $namafile;
            $dtUpload->status_pembayaran = $request->status_pembayaran;
            

            $nm->move(public_path().'/image',$namafile);
            $dtUpload->save();

            return redirect ('Add-Bagas');
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
    public function destroy(Request $request)
    {
        $mobil = showroom::findOrFail($request->id);
        $data->delete();

        return redirect('/ListCar-Bagas');
    }
}
