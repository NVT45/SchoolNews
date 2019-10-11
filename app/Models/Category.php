<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'sn_categories';
    protected $primaryKey = 'cate_id';
    protected $guarded = [];

    public function types(){
        return $this->hasMany(Type::class,'type_cate');
    }
    public function news(){
        return $this->hasManyThrough(News::class,Type::class,'type_cate','news_type');
    }
}
