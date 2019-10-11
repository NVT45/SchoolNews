<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $table = 'sn_schedules';
    protected $primaryKey = 'schedule_id';
    protected $guarded = [];
}
