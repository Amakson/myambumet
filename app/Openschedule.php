<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Openschedule extends Model
{
    protected $fillable = ['title', 'type', 'start_time', 'end_time'];
}
