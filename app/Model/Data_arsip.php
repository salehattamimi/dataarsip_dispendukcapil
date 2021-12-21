<?php

namespace App\Model;
use DB;

use Illuminate\Database\Eloquent\Model;

class Data_arsip extends Model
{
	
    protected $table = "arsip"; 
    protected $primaryKey = "id";

    public function arsip_kondisi()
    {
        return $this->belongsTo('App\Model\Arsip_kondisi', 'arsip_kondisi_id');
    }

    public function index()
    {
        return $this->belongsTo('App\Model\Indeks', 'index_id');
    }

    public function arsip_kategori()
    {
        return $this->belongsTo('App\Model\Arsip_kategori', 'arsip_kategori_id');
    }

    public function arsip_lokasi()
    {
        return $this->belongsTo('App\Model\Arsip_lokasi', 'arsip_lokasi_id');
    }

    public function arsip_pemilik()
    {
        return $this->belongsTo('App\Model\Arsip_pemilik', 'arsip_pemilik_id');
    }

    public function satuan_jumlah()
    {
        return $this->belongsTo('App\Model\Satuan_jumlah', 'satuan_jumlah_id');
    }

    public static function div_tabel_data_arsip($data_indeks,$data_lokasi,$data_kondisi)
    {   
            $selectAll = DB::table('arsip')
            ->select("*")
            ->join('arsip_kondisi', 'arsip_kondisi.id', '=', 'arsip.arsip_kondisi_id')
            ->join('satuan_jumlah', 'satuan_jumlah.id', '=', 'arsip.satuan_jumlah_id')
            ->join('indeks', 'indeks.id', '=', 'arsip.index_id')
            ->join('arsip_lokasi', 'arsip_lokasi.id' ,'=', 'arsip.arsip_lokasi_id')
            ->join('arsip_pemilik', 'arsip_pemilik.id', '=', 'arsip.arsip_pemilik_id');
            if(!empty($data_indeks) && $data_indeks!=0){
                $selectAll->where('arsip.index_id', $data_indeks); 
            } 
            if(!empty($data_lokasi) && $data_lokasi!=0)
            { 
                $selectAll->where('arsip.arsip_lokasi_id', $data_lokasi); 
            }
            if(!empty($data_kondisi) && $data_kondisi!=0)
            { 
                $selectAll->where('arsip.arsip_kondisi_id', $data_kondisi); 
            }
           
 

        $selectAll = $selectAll->get();
        return $selectAll;
    }
}
