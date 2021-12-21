<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator; 
use App\Model\Arsip_kondisi; 
use DB;

class KondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data_kondisi = Arsip_kondisi::all();
        return view('public_admin.kondisi.kondisi',compact('data_kondisi'));
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

    public function modal_tambah()
    { 
        return view('public_admin.kondisi.modal_tambah_kondisi');
    }



    public function simpan_kondisi(Request $request)
    { 
        $kondisi = new Arsip_kondisi();
        $kondisi->nama_kondisi = $request->get('nama');  
        $kondisi->keterangan = $request->get('keterangan');  
        $kondisi->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect ('/admin/kondisi');
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_kondisi = Arsip_kondisi::find($id);   
        return view('public_admin.kondisi.modal_ubah_kondisi',compact('data_kondisi'));
    } 

    public function simpan_kondisi_ubah(Request $request,$id)
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
        $kondisi = Arsip_kondisi::find($id);
        $kondisi->nama_kondisi = $request->get('nama'); 
        $kondisi->keterangan = $request->get('keterangan'); 
        $kondisi->save();
        session()->put('status', 'Kondisi berhasil diubah!'); 
        } 
        return redirect('/admin/kondisi');
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
        $kondisi = Arsip_kondisi::find($id);
        $kondisi->delete();
        return redirect('/admin/kondisi');
    }
}
