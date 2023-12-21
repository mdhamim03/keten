<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Whoops\Run;

class SubCategory extends Model
{
    use HasFactory;
    public function Category() {
        return $this->belongsTo(Category::class);
    }
    public function Post() {
        return $this->hasMany(Post::class);
    }
}
