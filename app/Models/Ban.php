<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{

    protected $table ="banned";

    public $timestamps = false;

    protected $guarded=[];

    public function Danisman()
    {
        return $this->belongsTo('App\Models\Danisman');
    }

    public function Psikolog()
    {
        return $this->belongsTo('App\Models\Psikolog');
    }
}
