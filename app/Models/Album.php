<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //
    protected $table = 'sn_albums';
    protected $primaryKey = 'album_id';
    protected $guarded = [];
}
