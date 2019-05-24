<?php

namespace App\Models;

use App\Models\Blog\BlogKategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Ticket\Comment;
use App\Models\Ticket\Ticket;

class Psikolog extends Authenticatable
{

    use SoftDeletes;

    protected $table ="psikologs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'sname',
        'name',
        'telno',
        'ban',
        'verified',
        'last_login_at',
        'last_login_ip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function hizmetler()
    {
        return $this->belongsToMany('App\Models\Hizmet');
    }

    public function calisma_saatleri()
    {
        return $this->hasMany('Models\CalismaSaatleri', 'psikolog_id');
    }

    public function calisiyor_mu($date)
    {
        return $this->calisma_saatleri->where('date', '=', $date)->first();
    }

    public function commentx()
    {
        return $this->hasMany(Comment::class);
    }

    public function ticketx()
    {
        return $this->hasMany(Ticket::class);
    }

    public function psdetay()
    {
        return $this->hasOne(PsikologDetay::class, 'psikolog_id');
    }
    public function psdosya()
    {
        return $this->hasOne(Psikologdosya::class, 'psikolog_id');
    }
    public function psuzman()
    {
        return $this->hasOne(Psikologkatuzman::class, 'psikolog_id');
    }

    

    //Psikolog detay sayfasında uzman kategorilerini belirlemek için.
    public function uzmankategoriler()
    {
        return $this->belongsToMany('App\Models\PsikologUzman','kat_psikolog');
    }



}
