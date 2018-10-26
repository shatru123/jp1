<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    //
    protected $table="speclization";
    protected $fillable=['specialization_name','sector_id'];

    public function sector(){


        return $this->belongsTo('App\Sector');


    }
}
