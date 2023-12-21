<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    
    function homePage() {
         $popularPosts = Post::with(['category:id,slug,title','user:id,name,profile_img_url'])->latest()->select('id','title','slug','user_id','category_id','featured_img_url','is_popular','content','created_at')->where('is_popular',1)->take(2)->get();

         $posts = Post::with(['category:id,slug,title','user:id,name,profile_img_url'])->latest()->paginate(2);
        //  dd($popularPosts);
         return view('frontend.homePage',compact('popularPosts','posts'));

    }
    //CATEGORY FILTEARING COLBACK
    function getPostByCategory($slug) {
        $posts = Post::whereHas('category',function($q) use ($slug){
            $q->where('slug', $slug);
        })->orWhereHas('subCategory',function($q) use ($slug){
            $q->where('slug', $slug);
        })->with(['category:id,title,slug','user:id,name,profile_img_url'])->get();

        $informations = Post::with(['category:id,slug,title','subCategory:id,slug,title','user:id,name,profile_img_url'])->latest()->paginate(8);

        return view('frontend.categoryPage',compact('posts','informations'));
    }
    //Blog Post Details
    function BlogDetail($slug) {
        $posts = Post::withCount('comments as totalCount')->with(['category:id,slug,title','user:id,name,profile_img_url','comments'])->where('slug',$slug)->first();
        $extraPost = Post::latest()->take(3)->get();
        $exploreTopics = Category::withCount('posts as totalCount')->latest()->take(6)->get();
        // dd($posts);
        
        return view('frontend.blogDetails',compact('posts','extraPost','exploreTopics'));
    }
}
