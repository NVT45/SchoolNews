<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $table = 'sn_photos';
    protected $primaryKey = 'photo_id';
    protected $guarded = [];
    public function album(){
        return $this->belongsTo(Album::class,'photo_album');
    }
}
