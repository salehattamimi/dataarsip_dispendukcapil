<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Indeks;
use App\Model\Arsip_kondisi;
use App\Model\Arsip_lokasi;
use App\Model\Data_arsip; 
use DB;
class Data_arsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_indeks = Indeks::all();
        $data_lokasi = Arsip_lokasi::all();
        $data_kondisi = Arsip_kondisi::all(); 
        return view('public_admin.data_arsip.data_arsip',compact('data_indeks','data_lokasi','data_kondisi'));
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
    public function div_tabel_data_arsip(Request $request)
    {  
        $data_indeks = $request->get('data_indeks'); 
        $data_lokasi = $request->get('data_lokasi'); 
        $data_kondisi = $request->get('data_kondisi'); 

        $data_arsip = Data_arsip::div_tabel_data_arsip($data_indeks,$data_lokasi,$data_kondisi);
        // dd($data_arsip);
        // $data_transaksibeli = TransaksiBeli::all(); 
        return view('public_admin.data_arsip.div_tabel_data_arsip'
                , compact('data_arsip'));
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
