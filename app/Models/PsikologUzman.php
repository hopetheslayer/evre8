<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PsikologUzman extends Model
{
    use SoftDeletes;

    protected $table = "psikolog_uzman";

    protected $fillable = ['name'];

    public function psikologuzi()
    {
        return $this->belongsToMany('App\Models\psikolog','kat_psikolog');
    }

    public function psikolog()
    {
        return $this->belongsTo(Psikolog::class, 'psikolog_id');
    }
}
