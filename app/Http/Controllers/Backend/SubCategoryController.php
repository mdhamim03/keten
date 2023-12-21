<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\SlugBuilder;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
class SubCategoryController extends Controller
{
    use SlugBuilder;
    function AllSubCategory() {
        $categories = Category::all();
        $subCategories = SubCategory::with('category:id,title')->latest()->get();
        return view('backend.category.AllSubCategory',compact('subCategories','categories'));
    }
    function StoreSubCategory(Request $request) {
        $request->validate([
            'title'=> 'required',
        ]);
        $subCategory = new SubCategory();
        $subCategory->title = $request->title;
        $subCategory->category_id = $request->catecoty_id;
        $subCategory->slug = $this->slugGenerator($request, SubCategory::class);
        $subCategory->save();
        return back();
    }
}
