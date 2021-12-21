<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Model\Data_arsip_inactive; 
use DB;

class DataExport implements FromView 
{  
    use Exportable; 
    protected $nomor_akte;
    protected $kecamatan;
    protected $nama_bayi;
    protected $kelurahan;
    protected $tahun_mulai;
    protected $tahun_selesai;

    function __construct($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai) { 
        $this->nama_bayi = $nama_bayi;
        $this->nomor_akte = $nomor_akte;
        $this->kecamatan = $kecamatan;
        $this->kelurahan = $kelurahan;
        $this->tahun_mulai = $tahun_mulai;
        $this->tahun_selesai = $tahun_selesai;
    }

    public function view(): View 
    {   
        $nama_bayi = $this->nama_bayi; 
        $nomor_akte = $this->nomor_akte;
        $kecamatan = $this->kecamatan; 
        $kelurahan = $this->kelurahan; 
        $tahun_mulai = $this->tahun_mulai; 
        $tahun_selesai = $this->tahun_selesai; 
   
        $data_laporan_arsip = Data_arsip_inactive::div_tabel_data_arsip_inactive($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai);    
        return view('public_admin.laporan_arsip.export_data_inactive', compact('data_laporan_arsip'));
    }  
}