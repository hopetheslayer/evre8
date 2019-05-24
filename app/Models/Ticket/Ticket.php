<?php

namespace App\Models\Ticket;

use App\Admin;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'psikolog_id','user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status','admin_id','cevaplandı'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function psikolog()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function comm()
    {
        return $this->hasMany(AdminComment::class);
    }
}
