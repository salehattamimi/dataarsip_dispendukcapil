<?php

namespace App\Model;
use DB;

use Illuminate\Database\Eloquent\Model;

class Satuan_jumlah extends Model
{ 
    protected $table = "satuan_jumlah"; 
    protected $primaryKey = "id";

    public static function satuan_all()
    { 
        $query = "
                SELECT satuan_jumlah 
                FROM arsip_inaktif
                UNION 
                SELECT distinct nama_satuan 
                FROM satuan_jumlah
                ORDER BY satuan_jumlah
            ";
        $selectAll = DB::select($query); 
        
        return $selectAll;
    }
    public function data_arsip()
    {
        return $this->hasMany('App\Model\Data_arsip', 'satuan_jumlah_id'); //pake local_key kalo nama id usernya bukan ' id'
    }

    public function data_arsip_inactive()
    {
        return $this->hasMany('App\Model\data_arsip_inactive', 'satuan_jumlah_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
}
