<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Helpers\SlugBuilder;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use SlugBuilder;

    function getAllCategories() {
        $categories = Category::latest()->paginate(4);
        $editeCategory = null;
        
        return view('backend.Category.AllCategory',compact('categories','editeCategory'));
    }
    //*StoreCategory
    function StoreCategories(Request $request) {
        //validation
        $request->validate([
            'title'=>'required',
        ]);
        $category = new Category();
        $this->storeOrUpdateCategory($category,$request);
        return back();
    }
    private function storeOrUpdateCategory($category,$request) {
        $category-> title = $request->title;
        //slug grnarated
       $slug = $this->slugGenerator($request, Category::class);
        $category->slug = $slug;
        $category->save();
    }
    //*StoreCategoryEnd
    //*editCategory
    function EditCategories($slug) {
        $categories = Category::latest()->paginate(4);
        $editeCategory = Category::where('slug',$slug)->first();
        return view('backend.Category.AllCategory',compact('categories','editeCategory'));
    }
    //*Update Category start
    function UpdateCategories(Request $request , $slug){
        $editeCategory = Category::where('slug',$slug)->first();
        $editeCategory->title = $request->title;
        $editeCategory->save();
        return redirect()->route('category.all');

        
    }
    //*editCategory end
    //*DeleteCategory
    function DeleteCategories($id) {
        $category = Category::find($id);
        $category->delete();
        return back();
    }

}
