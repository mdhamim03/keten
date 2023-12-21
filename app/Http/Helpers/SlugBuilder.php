<?php
    namespace App\Http\Helpers;
    trait SlugBuilder{
        public function slugGenerator($request,$model) {
            $oldSlugCount = $model::where('slug',"LIKE",'%'.str($request->title)->slug().'%')->count();
            if($oldSlugCount > 0){
                $oldSlugCount += 1;
                $slug = str($request->title)->slug() . '-' . $oldSlugCount;
            }else{
                $slug = str($request->title)->slug();
            }
            return $slug;
        }
    } 