<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Psikologdosya extends Model
{
    use SoftDeletes;

    protected $table = "psikolog_dosya";

    protected $guarded = [''];

    protected $fillable = ['imagex', 'thumbnail'];


    public function psikolog()
    {
        return $this->belongsTo(Psikolog::class, 'psikolog_id');
    }
}
