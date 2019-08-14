<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Letter extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'count'];
    
    public function add_Result($name, $count){
        $this->name = $name;
        $this->count = $count;
        $this->save();
    }
}
