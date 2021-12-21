<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Arsip_pemilik; 
use App\Model\Jenis_pemilik; 
use DB;


class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data_jenis = Jenis_pemilik::all();
        return view('public_admin.jenis_pemilik.jenis_pemilik',compact('data_jenis'));
    }
 
    public function modal_tambah()
    { 
        return view('public_admin.jenis_pemilik.modal_tambah_jenis_pemilik');
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

    public function simpan_jenis(Request $request)
    { 
        $jenis = new Jenis_pemilik();
        $jenis->nama_jenis = $request->get('nama');  
        $jenis->keterangan = $request->get('keterangan');  
        $jenis->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect ('/admin/jenis');
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_jenis = Jenis_pemilik::find($id);   
        return view('public_admin.jenis_pemilik.modal_ubah_jenis_pemilik',compact('data_jenis'));
    } 

    public function simpan_jenis_ubah(Request $request,$id)
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
        $jenis = Jenis_pemilik::find($id);
        $jenis->nama_jenis = $request->get('nama'); 
        $jenis->keterangan = $request->get('keterangan'); 
        $jenis->save();
        session()->put('status', 'Jenis berhasil diubah!'); 
        } 
        return redirect('/admin/jenis');
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
        
        $jenis = Jenis_pemilik::find($id);
        $jenis->delete();
        return redirect('/admin/jenis');
    }
}
