<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;

class UploadfileController extends Controller
{
    function index()
    {
        return view('upload');
    }

    function upload(Request $request)
    {
        // Validate file is an image
        $this->validate($request, [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Move file to storage directory
        $image = $request->file('select_file');
        $new_name = rand() . '.' . $image->getClientOriginalName();
        $image->move(public_path("images"), $new_name);

        // Save to database
        $upload = new Upload();
        $upload->url = url('/') . '/images/' . $new_name;
        $upload->save();
        
        // Go back to form page
        return back()->with('sucess', 'Image uploaded successfully')
                    ->with('path', $new_name);
    }

    // API endpoint to get all uploads
    function all()
    {
        $uploads = Upload::all();

        return response()->json($uploads);
    }
}
