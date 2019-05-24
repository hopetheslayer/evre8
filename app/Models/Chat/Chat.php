<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
