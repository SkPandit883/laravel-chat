<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Messages()
    {
        return  $this->hasMany(Message::class, 'from_user');
    }
    public function toMessage()
    {
        return  $this->hasMany(Message::class, 'to_user');
    }
}
