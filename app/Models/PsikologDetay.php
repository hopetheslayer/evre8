<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PsikologDetay extends Model
{
   use SoftDeletes;

    protected $table = "psikolog_detay";

    protected $guarded = [''];



    public function psikolog()
    {
        return $this->belongsTo(Psikolog::class, 'psikolog_id');
    }



}
