<?php

namespace App\Models\Turkiye;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function country()
    {
        return $this->belongsTo('App\Models\Turkiye\Country');
    }
}
