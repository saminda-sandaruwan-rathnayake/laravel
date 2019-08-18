<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //
    public $table = 'events';
    public $fillable = ['title','description','date','start_time','end_time'];
}
