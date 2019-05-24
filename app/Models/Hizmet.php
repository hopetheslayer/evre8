<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hizmet extends Model
{


    protected $fillable = ['name', 'price'];

    public function psikolog()
    {
        return $this->belongsToMany('App\Models\Psikolog');
    }
}
