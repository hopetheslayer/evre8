<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psikologkatuzman extends Model
{

    protected $table = "kat_psikolog";


    protected $guarded = [''];

    public function psikolog()
    {
        return $this->belongsTo(Psikolog::class, 'psikolog_id');
    }

    public function pxuzman()
    {
        return $this->hasOne(PsikologUzman::class, 'psikolog_id');
    }


}
