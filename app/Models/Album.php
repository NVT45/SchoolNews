<?php

namespace App\Models;

use App\Model\Photo;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //
    protected $table = 'sn_albums';
    protected $primaryKey = 'album_id';
    protected $guarded = [];
    public function photos(){
        return $this->hasMany(Photo::class,'photo_album');
    }
}


