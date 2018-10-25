<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //

    protected $fillable=['title','role_description','listed_by','listed_on','country','region','employment','experties','location_type','education','language','sector','specializations_id'];
}
