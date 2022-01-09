<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Indeks;
use App\Model\Satuan_jumlah;
use App\Model\Arsip_kondisi;
use App\Model\Arsip_lokasi;
use App\Model\Arsip_kategori;
use App\Model\Arsip_pemilik;
use App\Model\Data_arsip_inactive; 
use App\Model\Media;
use App\Model\Kecamatan;
use App\Model\Kelurahan; 
use DB;
use Excel;
use Datatables;


use App\Imports\ArsipInaktifImport;

class Dataarsip_inactiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_kecamatan = Kecamatan::where('regency_id','=',3506)->get();       
        return view('public_admin.data_arsip_inactive.data_arsip_inactive',compact('data_kecamatan'));
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

    public function tambah_modal()
    {  
        $data_kecamatan = Kecamatan::where('regency_id','=',3506)->get();  
        return view('public_admin.data_arsip_inactive.modal_tambah_data_arsip_inactive',compact('data_kecamatan'));
    }

    public function import_excel(Request $request)
    {
        $import = Excel::import(new ArsipInaktifImport,request()->file('select_file')); 
        return redirect()->back();
    }
    
    public function div_tabel_data_arsip_inactive_ajax()
    {
        $data_arsip_inactive = Data_arsip_inactive::div_tabel_data_arsip_inactive($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai); 

        $data = DataTables::of($data_arsip_inactive)
        ->addIndexColumn() 
        ->make(true);
        dd($data);
    }

    public function comment_arsip(Request $request)
    { 
        $id = $request->id;
        $data_komentar = Data_arsip_inactive::find($id);  
        return view('public_admin.data_arsip_inactive.modal_comment_arsip',compact('data_komentar','id'));
    }

    public function div_kelurahan(Request $request)
    { 
        $id_kecamatan = $request->id_kecamatan; 
        $kelurahan = Kelurahan::where('district_id','=',$id_kecamatan)->get(); 
        $str='';
        $str .= '<option value="0">--- Tampilkan Semua ---</option>';
        foreach($kelurahan as $r){
           $str .= '<option value="'.$r->name.'"> '.$r->name.'</option>';
        } 
        echo $str;
    }

    public function simpan_komentar(Request $request, $id)
    {
        $arsip = Data_arsip_inactive::find($id);
        $arsip->komentar = $request->komentar;
        $arsip->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect()->back();
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if($request->id_kecamatan === 0 || $request->kelurahan_id === 0 ){
            session()->put('statusT','Pilih Kecamatan atau Kelurahan Terlebih Dahulu');
            return redirect()->back(); 
        } else{ 
            $data_arsip_inactive = new Data_arsip_inactive();
            $data_arsip_inactive->nomor_akta = $request->get('nomor_akta');  
            $data_arsip_inactive->nama_bayi= $request->get('nama_bayi');  
            $data_arsip_inactive->tempat_lahir= $request->get('tempat_lahir');  
            $data_arsip_inactive->alamat= $request->get('alamat');  
            $data_arsip_inactive->tanggal_lahir= $request->get('tanggal_lahir');   
            $data_arsip_inactive->kelurahan= $request->get('nama_kelurahan');
            $data_arsip_inactive->kecamatan= $request->get('nama_kecamatan');
            $data_arsip_inactive->nama_ayah= $request->get('nama_ayah');
            $data_arsip_inactive->nama_ibu= $request->get('nama_ibu');   
            $data_arsip_inactive->rt= $request->get('rt'); 
            $data_arsip_inactive->rw= $request->get('rw');       
            $data_arsip_inactive->tanggal_terbit= $request->get('tanggal_terbit');       
            $data_arsip_inactive->save();
            session()->put('status', 'Data berhasil Ditambahkan!');
            return redirect ('/admin/data_arsip_inactive');    
        }
    } 

    public function div_tabel_data_arsip_inactive(Request $request)
    {    
        $nomor_akte = $request->get('no_akta'); 
        $kecamatan = $request->get('kecamatan'); 
        $nama_bayi = $request->get('nama_bayi'); 
        $kelurahan = $request->get('kelurahan');   
        if($kelurahan == '--- Tampilkan Semua ---'){
            $kelurahan = '';
        }
        if($kecamatan ==  '--- Tampilkan Semua ---'){
            $kecamatan = '';
        }
        $tahun_mulai = $request->get('tahun_mulai');
        $tahun_selesai = $request->get('tahun_selesai');
        
        $data_arsip_inactive = Data_arsip_inactive::div_tabel_data_arsip_inactive($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai); 
               
        return view('public_admin.data_arsip_inactive.div_tabel_data_arsip_inactive', compact('data_arsip_inactive'));
    }


    function action(Request $request)
    { 
            $image = $request->file('select_file');
            $new_name = 'art_'.$request->get('arsip_inactive_id').'_' . $image->getClientOriginalName() ;
            $image->move(('file_upload/data_arsip_inactive'), $new_name); 
            $data = new Media;
            $data->arsip_inactive_id  = $request->get('arsip_inactive_id');
            $data->nama_file = $request->get('nama_file');
            $data->keterangan = $request->get('keterangan');
            $data->ukuran = $request->get('ukuran');
            $data->path = 'data_arsip_inactive/' . $new_name; 
            $data->save();

            return response()->json([
                'message' => 'File Upload Successfully',
                'uploaded_image' => '<img src="/file_upload/data_arsip_inactive/' . $new_name . '" class="img-thumbnail" width="300"/>',
                'class_name' => 'alert-success',
                'res' => 'success'
            ]); 
            return response()->json([ 
                'uploaded_image' => '',
                'class_name' => 'alert-danger',
                'res' => 'Gagal'
            ]);
        
    } 

    public function hapus_file_data_arsip_inactive(Request $request)
    { 
        $id = $request->id;
        $portofolio = Media::find($id);
        $portofolio->delete();  
        
        return 'success';
        // return redirect('/admin/portofolio');
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


    public function modal_upload_data_arsip_inactive(Request $request)
    {
       $id = $request->get('id'); 

        // $data_portofolio = Portofolio::find($id);   
       $data_arsip_inactive_file = Media::
       where('arsip_inactive_id', $id)
       ->get();  

       return view('public_admin.data_arsip_inactive.modal_upload_data_arsip_inactive'
        , ['id' => $id]
        , compact('data_arsip_inactive_file'));
    }

    public function modal_upload_data_arsip_inactive_isi(Request $request)
    {  
        $id = $request->get('id'); 
 
        $data_arsip_inactive_file = Media::
                    where('arsip_inactive_id', $id)
                    ->get();  

        return view('public_admin.data_arsip_inactive.data_arsip_inactive_upload_isi'
                , ['id' => $id]
                , compact('data_arsip_inactive_file'));
    } 


    public function ubah_modal(Request $request)
    { 
        $id = $request->id;
        $data_arsip_inactive = Data_arsip_inactive::find($id);
        $data_kecamatan = Kecamatan::where('regency_id','=',3506)->get();        
        $data_kelurahan = Kelurahan::all(); 
        return view('public_admin.data_arsip_inactive.modal_ubah_data_arsip_inactive',compact('id','data_kecamatan','data_kelurahan','data_arsip_inactive'));
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
        if($request->id_kecamatan === 0 || $request->kelurahan_id === 0 ){
            session()->put('statusT','Pilih Kecamatan atau Kelurahan Terlebih Dahulu');
            return redirect()->back(); 
        } else{ 
            $data_arsip_inactive = Data_arsip_inactive::find($id);
            $data_arsip_inactive->nomor_akta = $request->get('nomor_akta');  
            $data_arsip_inactive->nama_bayi= $request->get('nama_bayi');  
            $data_arsip_inactive->tempat_lahir= $request->get('tempat_lahir');  
            $data_arsip_inactive->alamat= $request->get('alamat');  
            $data_arsip_inactive->tanggal_lahir= $request->get('tanggal_lahir');   
            $data_arsip_inactive->kelurahan= $request->get('nama_kelurahan');
            $data_arsip_inactive->kecamatan= $request->get('nama_kecamatan');
            $data_arsip_inactive->nama_ayah= $request->get('nama_ayah');
            $data_arsip_inactive->nama_ibu= $request->get('nama_ibu');   
            $data_arsip_inactive->tanggal_terbit= $request->get('tanggal_terbit');       
            $data_arsip_inactive->rt= $request->get('rt'); 
            $data_arsip_inactive->rw= $request->get('rw');       
            $data_arsip_inactive->save();
            session()->put('status', 'Data berhasil Ditambahkan!');
            return redirect()->back();    
        }
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
        $data_arsip_inactive = Data_arsip_inactive::find($id);
        $data_arsip_inactive->delete();
        // return redirect('/admin/data_arsip_inactive');
    }

    public function hapus_tabel(Request $request)
    { 
        $tahun_selesai = $request->tahun_selesai;
        $tahun_mulai = $request->tahun_mulai;
        $data_indeks = $request->data_indeks;
        $uraian_masalah = $request->uraian_masalah;

        $data_arsip_inactive = Data_arsip_inactive::where('id','!=','0');
        if(!empty($tahun_mulai) && !empty($tahun_selesai)){
            $data_arsip_inactive->whereBetween('tahun_arsip', [date($tahun_mulai), date($tahun_selesai)]);
        }
        if(!empty($data_indeks) || $data_indeks !=0){
            $data_arsip_inactive->where('indeks','data_indeks');
        }



         $data_arsip_inactive->delete();
        // return redirect('/admin/data_arsip_inactive');
    }
}