<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = "indoregion_villages"; 
    protected $primaryKey = "id";

    public function kecamatan()
    {
        return $this->belongsTo('App\Model\Kecamatan', 'indoregion_districts');
    }
}
