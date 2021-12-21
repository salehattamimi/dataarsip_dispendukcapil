<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Arsip_kondisi extends Model
{ 
    protected $table = "arsip_kondisi"; 
    protected $primaryKey = "id";

    public function data_arsip()
    {
        return $this->hasMany('App\Model\Data_arsip', 'arsip_kondisi_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
    public function data_arsip_inactive()
    {
        return $this->hasMany('App\Model\Data_arsip_inactive', 'arsip_kondisi_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
}
