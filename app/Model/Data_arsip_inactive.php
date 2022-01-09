<?php

namespace App\Model;
use DB;

use Illuminate\Database\Eloquent\Model;

class Data_arsip_inactive extends Model
{
    //

    protected $table = "arsip_inaktif"; 
    protected $primaryKey = "id";

    protected $fillable = [
            'nomor_akta',  
            'nama_bayi',  
            'tempat_lahir', 
            'tanggal_lahir', 
            'kode_klasifikasi', 
            'alamat', 
            'kelurahan',  
            'kecamatan',  
            'nama_ayah',  
            'nama_ibu',
            'rt',
            'tanggal_terbit',
            'komentar',
            'rw'  
    ];

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

    public static function div_tabel_data_arsip_inactive($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai)
    {   
            $selectAll = DB::table('arsip_inaktif')
            ->select("arsip_inaktif.id as id_inaktif","arsip_inaktif.*");
            if(!empty($nama_bayi)){
                $selectAll->where('nama_bayi', 'like', '%'.$nama_bayi.'%'); 

            }  
            if(!empty($nomor_akte)){
                $selectAll->where('arsip_inaktif.nomor_akta','like','%'.$nomor_akte.'%'); 
            }  
            if(!empty($kecamatan) ){ 
                $selectAll->where('arsip_inaktif.kecamatan', $kecamatan);    
            }
            if(!empty($kelurahan)){ 
                $selectAll->where('arsip_inaktif.kelurahan', $kelurahan);   
            }  
            if(!empty($tahun_mulai) && !empty($tahun_selesai)){
            $selectAll->whereBetween(DB::raw('YEAR(tanggal_terbit)'), [date($tahun_mulai), date($tahun_selesai)]);
            }  
            $selectAll = $selectAll->orderBy('id','desc'); 
            $selectAll = $selectAll->get();
            return $selectAll;
          
    }

    public static function div_tabel_laporan_arsip($nama_bayi,$nomor_akte,$kecamatan,$kelurahan,$tahun_mulai,$tahun_selesai)
    {   
           
        $selectAll = DB::table('arsip_inaktif')
        ->select("arsip_inaktif.id as id_inaktif","arsip_inaktif.*");
        if(!empty($nama_bayi)){
            $selectAll->where('nama_bayi', 'like', '%'.$nama_bayi.'%'); 

        }  
        if(!empty($nomor_akte)){
            $selectAll->where('arsip_inaktif.nomor_akta', $nomor_akte); 
        }  
        if(!empty($kecamatan) ){ 
            $selectAll->where('arsip_inaktif.kecamatan', $kecamatan);    
        }
        if(!empty($kelurahan)){ 
            $selectAll->where('arsip_inaktif.kelurahan', $kelurahan);   
        }  

        if(!empty($tahun_mulai) && !empty($tahun_selesai)){
            $selectAll->whereBetween(DB::raw('YEAR(created_at)'), [date($tahun_mulai), date($tahun_selesai)]);
            }  
        $selectAll = $selectAll->orderBy('id','desc'); 
        $selectAll = $selectAll->get();
        return $selectAll;
    }

    public function media()
    {
        return $this->hasMany('App\Model\Media', 'arsip_inactive_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public static function count_media()
    {
        $media = DB::table('media')->count();
        return $media;
    }

    public static function count_inaktif()
    {
        $arsip_inaktif = DB::table('arsip_inaktif')->count();
        return $arsip_inaktif;
    }
}