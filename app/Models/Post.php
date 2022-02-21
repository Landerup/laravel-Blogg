<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //tala om vad en post kan innehålla
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    //returnera en post baserat på användar-id
    public function user() {
        return $this->hasOne(User::class);
    }


}
