<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $connection = 'mysql';
    protected $table = 'personas';
    public $timestamps = false;
    protected $guarded = [];


}



