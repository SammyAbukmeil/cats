<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function ImageUploadPost(Request $request)
    {

        // dd(request());die;

        // request()->validate([
        //     'image' => 'required|image',
        // ]);

		$this->validate($request, [
	    	'image' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
        ]);
        
        die('test');

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images', $imageName));

        return back()
            ->with('success', 'you have uploaded an image :)')
            ->with('image', $imageName);
    }
}
