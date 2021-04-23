<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('file.create');
    }

    public function store(Request $request)
    {
         $img = $request->file('file');
         $file_name = uniqid().'-'.time().'.'.$img->getClientOriginalExtension();
         $file_path = 'uploads/'.$file_name;
         $file = new File;
         $file->filename = $file_name;
         $file->filetype = $img->getClientOriginalExtension();;
         $file->filesize = $img->getSize();;
         $file->filepath = 'uploads/';
         $file->file = $file_path;
         $file->save();
         $request->file('file')->move(storage_path('uploads'), $file_name);
         return response()->json(['success' => 'File Uploaded Successfully']);

    }
}
