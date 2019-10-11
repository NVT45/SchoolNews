<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $table = 'sn_typenew';
    protected $primaryKey = 'type_id';
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(Category::class,'type_cate');
    }
    public function news(){
        return $this->hasMany(News::class,'news_type');
    }
}
