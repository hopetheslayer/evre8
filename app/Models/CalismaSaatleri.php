<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class CalismaSaatleri extends Model
{
    use SoftDeletes;

    protected $fillable = ['date', 'start_time', 'finish_time', 'psikolog_id'];


    public function psikolog()
    {
        return $this->belongsTo(Psikolog::class, 'psikolog_id');
    }


}
