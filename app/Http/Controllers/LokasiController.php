<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator; 
use App\Model\Arsip_lokasi; 
use DB;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data_lokasi = Arsip_lokasi::all();
        return view('public_admin.lokasi.lokasi',compact('data_lokasi'));
    }


    public function modal_tambah()
    { 
        return view('public_admin.lokasi.modal_tambah_lokasi');
    }



    public function simpan_lokasi(Request $request)
    { 
        $lokasi = new Arsip_lokasi();
        $lokasi->nama_lokasi = $request->get('nama');  
        $lokasi->keterangan = $request->get('keterangan');  
        $lokasi->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect ('/admin/lokasi');
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_lokasi = Arsip_lokasi::find($id);   
        return view('public_admin.lokasi.modal_ubah_lokasi',compact('data_lokasi'));
    } 

    public function simpan_lokasi_ubah(Request $request,$id)
    { 
        $validator= Validator::make($request->all(),[ 
            'nama' => 'required', 
            'keterangan' => 'required' 
        ], [
            'nama.required' => 'Data nama Harus Diisi', 
            'keterangan.required' => 'Keterangan Harus Diisi'  
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
        $lokasi = Arsip_lokasi::find($id);
        $lokasi->nama_lokasi = $request->get('nama'); 
        $lokasi->keterangan = $request->get('keterangan'); 
        $lokasi->save();
        session()->put('status', 'Lokasi berhasil diubah!'); 
        } 
        return redirect('/admin/lokasi');
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
        $lokasi = Arsip_lokasi::find($id);
        $lokasi->delete();
        return redirect('/admin/lokasi');
    }
}
