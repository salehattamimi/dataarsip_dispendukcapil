<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jenis_pemilik extends Model
{
    //
    protected $table = "jenis_pemilik"; 
    protected $primaryKey = "id";

    public function arsip_pemilik()
    {
        return $this->hasMany('App\Model\Pemilik', 'jenis_pemilik_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
    
    public function data_arsip_inactive()
    {
        return $this->hasMany('App\Model\Data_arsip_inactive', 'jenis_pemilik_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
}
