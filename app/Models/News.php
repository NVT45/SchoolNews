<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'sn_news';
    protected $primaryKey = 'news_id';
    protected $guarded = [];
    protected $fillable = ['news_image'];
    public function type(){
        return $this->belongsTo(Type::class,'news_type');
    }
}
