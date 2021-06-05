<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\imagesTrait;


class ImageController extends Controller
{
    use imagesTrait ;

    public function uploadPhoto(Request $request)
    {
        // $imageName = Image::make($request->image)
        //     ->resize($request->width, $request->height)
        //     ->encode('jpg', 50);
            // Storage::disk('local')->put('public/' . $request->path .'/'. $request->image->hashName(), (string) $imageName, 'public');
            $image = $this->saveImages($request->image , 'images');
       
            return $request->image->hashName();
    }

    public function removePhoto(Request $request)
    {
        Storage::disk('local')->delete('public/' . $request->path .'/'. $request->image);
        return "Removed";
    }
}
