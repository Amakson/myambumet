<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Availablemedic extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted-at'];
    protected $fillable = ['Username', 'Cert_Level', 'Location'];
}
