<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator; 
use App\Model\Kecamatan;
use App\Model\Kelurahan;
use App\Model\Data_arsip_inactive; 
use App\Model\Media;
use DB;
use PDF;  
use Excel;
use App\Exports\ArsipInaktifExport;
use App\Exports\DataExport; 


class LaporanArsipController extends Controller
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
        return view('public_admin.laporan_arsip.laporan_arsip',compact('data_kecamatan'));
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

    public function div_tabel_laporan_arsip(Request $request)
    {  
        $nomor_akte = $request->get('nomor_akte'); 
        $kecamatan = $request->get('kecamatan'); 
        $nama_bayi = $request->get('nama_bayi'); 
        $kelurahan = $request->get('kelurahan');   
        $tahun_mulai = $request->get('tahun_mulai');   
        $tahun_selesai = $request->get('tahun_selesai');   
        if($kelurahan == '--- Tampilkan Semua ---'){
            $kelurahan = '';
        }
        if($kecamatan ==  '--- Tampilkan Semua ---'){
            $kecamatan = '';
        }
        // dd($uraian_masalah);
        $data_arsip_inactive = Data_arsip_inactive::div_tabel_laporan_arsip($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai);
        // dd($data_arsip);
        // $data_transaksibeli = TransaksiBeli::all(); 
        return view('public_admin.data_arsip_inactive.div_tabel_data_arsip_inactive', compact('data_arsip_inactive'));
    }

    public function cetak_laporan_arsip(Request $request)
    {  
        // dd($request->all());
        $nomor_akte = $request->get('nomor_akte'); 
        $kecamatan = $request->get('nama_kecamatan'); 
        $nama_bayi = $request->get('nama_bayi'); 
        $kelurahan = $request->get('nama_kelurahan');   
        $tahun_mulai = $request->get('tahun_mulai');   
        $tahun_selesai = $request->get('tahun_selesai');  

        if($kelurahan == '--- Tampilkan Semua ---'){
            $kelurahan = '';
        }
        if($kecamatan ==  '--- Tampilkan Semua ---'){
            $kecamatan = '';
        }   
        $data_laporan_arsip = Data_arsip_inactive::div_tabel_data_arsip_inactive($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai);  
        return view('public_admin.laporan_arsip.print_laporan_arsip', compact('data_laporan_arsip'));
    }
    public function export_excel(Request $request)
    {
        
        $nomor_akte = $request->get('nomor_akte'); 
        $kecamatan = $request->get('kecamatan'); 
        $nama_bayi = $request->get('nama_bayi'); 
        $kelurahan = $request->get('kelurahan'); 
        $tahun_mulai = $request->get('tahun_mulai2');   
        $tahun_selesai = $request->get('tahun_selesai2');  
        if($kelurahan == '--- Tampilkan Semua ---'){
            $kelurahan = '';
        }
        if($kecamatan ==  '--- Tampilkan Semua ---'){
            $kecamatan = '';
        } 
        $date_now = date('Y-m-d');
        $data_arsip_inactive = Data_arsip_inactive::div_tabel_data_arsip_inactive($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai); 
        $nama_file = 'sistem_data_arsip_'.$date_now.'.xlsx';
        
        return Excel::download(new DataExport($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai), $nama_file);
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