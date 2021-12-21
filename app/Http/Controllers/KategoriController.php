<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Arsip_kategori; 
use DB;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_kategori = Arsip_kategori::all();
        return view('public_admin.kategori.kategori',compact('data_kategori'));
    }
    public function modal_tambah()
    {
        return view('public_admin.kategori.modal_tambah_kategori');
    }
    public function simpan_kategori(Request $request)
    { 
        $kategori = new Arsip_kategori();
        $kategori->nama_kategori = $request->get('nama');  
        $kategori->keterangan = $request->get('keterangan');  
        $kategori->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect ('/admin/kategori');
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_kategori = Arsip_kategori::find($id);   
        return view('public_admin.kategori.modal_ubah_kategori',compact('data_kategori'));
    }

    public function simpan_kategori_ubah(Request $request,$id)
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
        $kategori = Arsip_kategori::find($id);
        $kategori->nama_kategori = $request->get('nama'); 
        $kategori->keterangan = $request->get('keterangan'); 
        $kategori->save();
        session()->put('status', 'Arsip_kategori berhasil diubah!'); 
        } 
        return redirect('/admin/kategori');
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
        $kategori = Arsip_kategori::find($id);
        $kategori->delete();
        return redirect('/admin/kategori');
    }
}
