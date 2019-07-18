<?php

namespace App\Http\Controllers;

use App\Pesanan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_id = Auth::id();

        $s = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvyxyz',5)),0,5);
        $awal = strtoupper(substr($request->matapelajaran,0,3));
        $nomoriv = $awal.date('ymdHis');

        // dd($nomoriv);

        $pesanan = new Pesanan;

        $pesanan -> mata_pelajaran = $request -> matapelajaran;
        $pesanan -> durasi = $request -> durasi;
        $pesanan -> pesan = $request -> pesan;
        $pesanan -> alamat = $request -> alamat;
        $pesanan -> provinsi = $request -> provinsi;
        $pesanan -> kota = $request -> kota;
        $pesanan -> kecamatan = $request -> kecamatan;
        $pesanan -> total = $request -> total;
        $pesanan -> buka_kelas_id = $request -> buka_kelas_id;
        $pesanan -> kode_invoice = $nomoriv;
        $pesanan -> user_id = $user_id;
        $pesanan -> status = "waiting";

        $pesanan -> save();

        return redirect() -> route('muriddashboard');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
