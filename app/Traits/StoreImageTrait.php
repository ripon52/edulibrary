<?php
namespace App\Traits;

use Illuminate\Support\Facades\Request;

use Illuminate\Support\Str;
trait StoreImageTrait{

    public function ImageStore($file,$path){
        $fileName = 'EDU_LIBRARY_STORE_'.Date('Y').'_'.Str::random(10).".".$file->getClientOriginalExtension();
        $file->move($path,$fileName);
        return $fileName;
    }

    public function unlinkImage($path){
        @unlink($path);
    }

}
