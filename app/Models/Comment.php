<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function post() {
        return $this->belongsTo(post::class);
    }
    public function user() {
        return $this->belongsTo(user::class);
    }
    public function replyes() {
        return $this->hasMany(Comment::class,'parent_id');
    }
}
