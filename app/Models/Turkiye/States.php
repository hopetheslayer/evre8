<?php

namespace App\Models\Turkiye;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    public function states()
    {
        return $this->hasMany('App\Models\Turkiye\States');
    }
}
