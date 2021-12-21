<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Indeks;
use App\Model\Satuan_jumlah;
use App\Model\Arsip_kondisi;
use App\Model\Arsip_lokasi;
use App\Model\Arsip_kategori;
use App\Model\Arsip_pemilik;
use App\Model\Data_arsip_inactive; 
use App\Model\Media;
use App\User;
use DB;

class GrafikController extends Controller
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

    public function grafik_kondisi()
    { 

        $arsip = DB::table('arsip_inaktif') 
                     ->select(DB::raw('count(YEAR(created_at)) as jumlah_tahun, created_at as tahun_arsip')) 
                     ->groupBy('tahun_arsip')
                     ->get(); 
        return view('public_admin.grafik.grafik_kondisi',compact('arsip'));
    }

    public function div_grafik_media()
    { 
        
        $arsip_media = DB::table('arsip_inaktif')
                     ->join('media', 'media.arsip_inactive_id', '=', 'arsip_inaktif.id')
                     ->select(DB::raw('count(YEAR(arsip_inaktif.created_at)) as jumlah_tahun, arsip_inaktif.created_at as tahun_arsip')) 
                     ->groupBy('tahun_arsip')
                     ->get();
        // dd($arsip);
        return view('public_admin.grafik.grafik_media',compact('arsip_media'));
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