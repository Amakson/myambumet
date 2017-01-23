<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Openschedule extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted-at'];
    protected $fillable = ['title', 'type', 'start_time', 'end_time'];
}
