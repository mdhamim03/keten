<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function SubCategory() {
        return $this->hasMany(SubCategory::class);
    }
    public function Posts() {
        return $this->hasMany(Post::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
