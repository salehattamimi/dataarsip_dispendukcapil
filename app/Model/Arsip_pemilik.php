<?php

namespace App\Model;
use DB;

use Illuminate\Database\Eloquent\Model;

class Arsip_pemilik extends Model
{
    //
    protected $table = "arsip_pemilik"; 
    protected $primaryKey = "id";

    public function jenis_pemilik()
    {
        return $this->belongsTo('App\Model\Jenis_pemilik', 'pemilik_jenis_id');
    }

    public function data_arsip()
    {
        return $this->hasMany('App\Model\Data_arsip', 'arsip_pemilik_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
    
    public function data_arsip_inactive()
    {
        return $this->hasMany('App\Model\Data_arsip_inactive', 'arsip_pemilik_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public static function data_arsip_all()
    { 
        $query = "
                SELECT nama_pemilik 
                FROM arsip_pemilik
                UNION 
                SELECT distinct divisi 
                FROM arsip_inaktif 
            ";
        $selectAll = DB::select($query); 
        
        return $selectAll;
    }
}
