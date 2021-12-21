<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Indeks; 
use DB;

class IndeksController extends Controller
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
        return view('public_admin.indeks.indeks',compact('data_indeks'));
    }

    public function modal_tambah()
    {
        return view('public_admin.indeks.modal_tambah_indeks');
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


    public function simpan_indeks(Request $request)
    { 
        $indeks = new Indeks();
        $indeks->nama_indeks = $request->get('nama');  
        $indeks->keterangan = $request->get('keterangan');  
        $indeks->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect ('/admin/indeks');
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_indeks = Indeks::find($id);   
        return view('public_admin.indeks.modal_ubah_indeks',compact('data_indeks'));
    }

    public function simpan_indeks_ubah(Request $request,$id)
    { 
        $validator= Validator::make($request->all(),[ 
            'nama' => 'required', 
            'keterangan' => 'required' 
        ], [
            'nama.required' => 'Data nama Harus Diisi', 
            'keterangan.required' => 'Jenis Harus Diisi'  
        ]);
        if ($validator->fails()) {
            $msg = "";
            foreach ($validator->messages()->all() as $message) {
                $msg .= $message . ".
                ";
            }
            session()->put('statusT', 'Kesalahan pengisian form ubah: ' . $msg); 
            //return view('ajax-result.ruangrapat.insert');
        } else {
        $indeks = Indeks::find($id);
        $indeks->nama_indeks = $request->get('nama'); 
        $indeks->keterangan = $request->get('keterangan'); 
        $indeks->save();
        session()->put('status', 'Indeks berhasil diubah!'); 
        } 
        return redirect('/admin/indeks');
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
        $indeks = Indeks::find($id);
        $indeks->delete();
        return redirect('/admin/indeks');
    }
}
