<?php

namespace App\Http\Controllers\Backend;


use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\seoMediaUplode;
use App\Http\Helpers\SlugBuilder;
use App\Models\Post;
use PhpParser\Node\NullableType;

class PostController extends Controller
{
    use seoMediaUplode,SlugBuilder;
    function AllPOsts() {
        $categories = Category::all();
        $subCategoryies = SubCategory::all();
        return view('backend.Posts.AddPost',compact('subCategoryies','categories'));
    }
    function testPost(Request $request)  {
        $categoryId = $request->categoryId;
       $subCategoryies = SubCategory::where('category_id',$categoryId)->get();
       return $subCategoryies;
    }
    function postStore(Request $request) {
        $TitleSlug = $this->slugGenerator($request,Post::class);
        $fraturedImage = $this->uplodeSeoSingleMedia($request->featured_img,$TitleSlug,'posts');
        $post = new Post();
        $post->category_id = $request->category;
        $post->sub_category_id = $request->subcategory;
        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->slug	 = $TitleSlug;
        $post->featured_img	 = $fraturedImage['fileName'];
        $post->featured_img_url	 = $fraturedImage['fileUrl'];
        $post->content	 = $request->content;
        $post->save();
        notify()->success('Post update Success⚡️');
        return back();
    }
    function getAllPost() {
        $posts = Post::where('user_id',auth()->user()->id)->get();
        return view('backend.Posts.AllPost',compact('posts'));
    }
    function CahangStatus (Request $request){
       $post = Post::find($request->id);
       if($post->is_popular==0){
        $post->is_popular = 1;
       $post->save();
       return 'success';
       }else{
        $post->is_popular = 0;
       $post->save();
       return 'error';
       }
    }
}
