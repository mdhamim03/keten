<?php
    namespace App\Http\Helpers;

    use Carbon\Carbon;
    trait seoMediaUplode{
        function uplodeSeoSingleMedia($file,$slug,$folder='others') {
            if($file){
                $ext = $file->extension();
                $fileName = $slug.'.'.$ext;
                $filePath = $file->storeAs($folder,$fileName,'public');   
                $fileUrl = asset('storage/'.$filePath);
                $fileInfo = [
                   "fileName" => $fileName,
                   "fileUrl" => $fileUrl
                ];
                return $fileInfo;
            }
        }
         
        
    }