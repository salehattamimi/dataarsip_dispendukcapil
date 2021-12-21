<?php

namespace App\Exports;

use App\Model\Data_arsip_inactive; 
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ArsipInaktifExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Data_arsip_inactive::all();
    }

    // public function model(array $row)
    // {					
    //     return Data_arsip_inactive::where([
    //         'kode_klasifikasi' => $row['kode_klasifikasi'], 
    //         'indeks' => $row['indeks'], 
    //         'jumlah_unit' => $row['jumlah_unit'], 
    //         'nomor_berkas' => $row['nomor_berkas'], 
    //         'nomor_box' => $row['nomor_box'], 
    //         'nomor_rak' => $row['nomor_rak'], 
    //         'nomor_bku' => $row['nomor_bku'], 
    //         'bulan_arsip' => $row['bulan_arsip'], 
    //         'uraian_masalah' => $row['uraian_masalah'], 
    //         'divisi' => $row['divisi'], 
    //         'tahun_arsip' => $row['tahun_arsip'], 
    //         'keterangan' => $row['keterangan'], 
    //         'tingkat_perkembangan' => $row['tingkat_perkembangan'], 
    //     ]);
    // }

    // public function div_tabel_laporan_arsip($data_pemilik,$tahun_mulai,$tahun_selesai)
    // {   
    //         $selectAll = DB::table('arsip_inaktif')
    //         ->select("arsip_inaktif.id as id_inaktif","arsip_inaktif.keterangan as keterangan_inaktif", "arsip_inaktif.*","arsip_kondisi.*", "indeks.*","arsip_lokasi.*","arsip_pemilik.*")
    //         ->leftjoin('arsip_kondisi', 'arsip_kondisi.id', '=', 'arsip_inaktif.arsip_kondisi_id') 
    //         ->leftjoin('indeks', 'indeks.id', '=', 'arsip_inaktif.index_id')
    //         ->leftjoin('arsip_lokasi', 'arsip_lokasi.id' ,'=', 'arsip_inaktif.arsip_lokasi_id')
    //         ->leftjoin('arsip_pemilik', 'arsip_pemilik.id', '=', 'arsip_inaktif.arsip_pemilik_id'); 
    //         if(!empty($tahun_mulai) && !empty($tahun_selesai)){
    //         $selectAll->whereBetween('tahun_arsip', [date($tahun_mulai), date($tahun_selesai)]);
    //         } 
 
    //         if(!empty($data_pemilik) && $data_pemilik!=0)
    //         { 
    //             $selectAll->where('arsip_inaktif.arsip_pemilik_id', $data_pemilik); 
    //         } 
         
    //     $selectAll = $selectAll->get();
    //     return $selectAll;
    // }
}
