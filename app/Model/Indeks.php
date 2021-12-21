<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Indeks extends Model
{ 
    protected $table = "indeks"; 
    protected $primaryKey = "id";

    public function data_arsip()
    {
        return $this->hasMany('App\Model\Data_arsip', 'index_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
    
    public function data_arsip_inactive()
    {
        return $this->hasMany('App\Model\Data_arsip_inactive', 'index_id'); //pake local_key kalo nama id usernya bukan ' id'
    }
}
