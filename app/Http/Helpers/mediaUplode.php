<?php
    namespace App\Http\Helpers;

    use Carbon\Carbon;
    trait mediaUplode{
        function uplodeSingleMedia($file,$folder='others') {
            if($file){
                $ext = $file->extension();
                $fileName = $folder.'-'.time().'.'.$ext;
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