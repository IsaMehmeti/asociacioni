<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()

    {   $files = File::all();
        return view('file.index', compact('files'));
    }

    public function create()
    {
        return view('file.create');
    }

    public function store(Request $request)
    {

        $request->validate([
        'file' => 'required|file|max:50000',
        ]);
         $img = $request->file('file');
         $file_name = uniqid().'-'.time().'.'.$img->getClientOriginalExtension();
         $file_path = 'uploads\\'.$file_name;
         $file = new File;
         $file->filename = $file_name;
         $file->filetype = $img->getClientOriginalExtension();;
         $file->filesize = $img->getSize();;
         $file->filepath = '\uploads';
         $file->file = $file_path;
         $file->originalName = $img->getClientOriginalName();
         $file->save();
         $request->file('file')->move(storage_path('uploads'), $file_name);
         return response()->json(['success' => 'File Uploaded Successfully']);

    }

    public function download($id)
    {
        $file = File::findOrFail($id);
        $filePath = storage_path($file->file);
    	$headers = ['Content-Type: application/'. $file->filetype];
    	$fileName = $file->originalName;
    	if (!file_exists(storage_path($file->file))) {
    	    return redirect()->back()->with(['danger' => __('messages.File doesn\'t exist')]);
    	}
    	return response()->download($filePath, $fileName, $headers);
    }

    public function destroy($id)
    {
       $file = File::findOrFail($id);
       if (file_exists(storage_path($file->file))) {
        unlink(storage_path($file->file));
       }
       $file->delete();
       return redirect()->back()->with(['status' => __('messages.Deleted Successfully')]);

    }
}
