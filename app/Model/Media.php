<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Media extends Model
{ 
    protected $table = "media"; 
    protected $primaryKey = "id";

    public function arsip_inactive()
    {
        return $this->belongsTo('App\Model\arsip_inactive', 'arsip_inactive_id');
    }

    public static function count_alih_media($id)
    {
        $query = Media::selectRaw('count(*) as count')->where('arsip_inactive_id','=',$id)->first(); 

        return $query;
    }
}