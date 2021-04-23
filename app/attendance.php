<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    protected $table = 'attendance';
    //primary key
    public $primaryKey = 'id';
    public $timestamps = true;
}
