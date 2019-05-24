<?php

namespace App\Models;


use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Randevular extends Model
{
    use SoftDeletes;

    protected $fillable = ['start_time', 'finish_time', 'comments', 'user_id', 'psikolog_id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function psikolog()
    {
        return $this->belongsTo(Psikolog::class, 'psikolog_id');
    }

    public function hizmet()
    {
        return $this->belongsTo(Hizmet::class, 'hizmet_id');
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setClientIdAttribute($input)
    {
        $this->attributes['user_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeIdAttribute($input)
    {
        $this->attributes['psikolog_id'] = $input ? $input : null;
    }



}
