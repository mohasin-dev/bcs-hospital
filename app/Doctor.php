<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function degrees()
    {
        return $this->belongsToMany('App\Degree')->withTimestamps();
    }
    public function specialists()
    {
        return $this->belongsToMany('App\Specialist')->withTimestamps();
    }
}
