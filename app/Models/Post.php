<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsTo(category::class);
    }
    public function SubCategory() {
        return $this->belongsTo(SubCategory::class);
    }
    public function user() {
        return $this->belongsTo(user::class); 
    }
    public function comments() {
        return $this->hasMany(comment::class)->where('parent_id', null)->with('user:id,name,profile_img_url')->with('replyes');
    }
    
}
