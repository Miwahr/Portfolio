<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catch_me extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'count'];
}
