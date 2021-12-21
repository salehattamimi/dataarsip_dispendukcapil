<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Arsip_pemilik; 
use App\Model\Jenis_pemilik; 
use DB;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data_pemilik = Arsip_pemilik::all();
        return view('public_admin.pemilik.pemilik',compact('data_pemilik'));
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


    public function modal_tambah()
    {
        $data_jenis_pemilik = Jenis_pemilik::all();
        return view('public_admin.pemilik.modal_tambah_pemilik', compact('data_jenis_pemilik'));
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


    public function simpan_pemilik(Request $request)
    { 
        $pemilik = new Arsip_pemilik();
        $pemilik->nama_pemilik = $request->get('nama');  
        $pemilik->email = $request->get('email'); 
        $pemilik->no_telp = $request->get('no_telp'); 
        $pemilik->alamat = $request->get('alamat');  
        $pemilik->jabatan = $request->get('jabatan'); 
        $pemilik->golongan = $request->get('golongan'); 
        $pemilik->wilayah = $request->get('wilayah'); 
        $pemilik->pekerjaan = $request->get('pekerjaan');  
        $pemilik->pemilik_jenis_id = $request->get('jenis_pemilik_id');  
        $pemilik->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect ('/admin/pemilik');
    } 

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_jenis_pemilik = Jenis_pemilik::all();
        $data_pemilik = Arsip_pemilik::find($id);   
        return view('public_admin.pemilik.modal_ubah_pemilik',compact('data_pemilik','data_jenis_pemilik'));
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

    public function simpan_pemilik_ubah(Request $request,$id)
    { 
        $validator= Validator::make($request->all(),[ 
            'nama' => 'required', 
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required' 

        ], [
            'nama.required' => 'Data nama Harus Diisi', 
            'email.required' => 'Email Harus Diisi', 
            'no_telp.required' => 'Data No Telp Harus Diisi', 
            'alamat.required' => 'Data Alamat Harus Diisi'
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
        $pemilik = Arsip_pemilik::find($id);
        $pemilik->nama_pemilik = $request->get('nama');  
        $pemilik->email = $request->get('email'); 
        $pemilik->no_telp = $request->get('no_telp'); 
        $pemilik->alamat = $request->get('alamat');  
        $pemilik->jabatan = $request->get('jabatan'); 
        $pemilik->golongan = $request->get('golongan'); 
        $pemilik->wilayah = $request->get('wilayah'); 
        $pemilik->pekerjaan = $request->get('pekerjaan');  
        $pemilik->pemilik_jenis_id = $request->get('jenis_pemilik_id');   
        $pemilik->save();
        session()->put('status', 'Indeks berhasil diubah!'); 
        } 
        return redirect('/admin/pemilik');
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
        $pemilik = Arsip_pemilik::find($id);
        $pemilik->delete();
        return redirect('/admin/pemilik');
    }
}
