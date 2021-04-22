<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollegiumStoreRequest;
use App\Models\Collegium;
use Illuminate\Http\Request;

class CollegiumController extends Controller
{

    public function index()
    {
        $collegiums = Collegium::all();
        return view('collegium.index', compact('collegiums'));
    }
    public function create()
    {
        return view('collegium.create');
    }

    public function store(CollegiumStoreRequest $request)
    {
        $img = $request->file('image');
        $directoryName ='files/collegium';
                 if (!is_dir($directoryName)) {
                    mkdir($directoryName, 0700, true);
                 }
                 $file_name = uniqid().'-'.time().'.'.$img->getClientOriginalExtension();
                 $file_type = $img->getClientOriginalExtension();
                 $file_size = $img->getSize();
                 $file_path = 'files/collegium/'.$file_name;
                 $request->file('image')->move('files/collegium', $file_name);
        Collegium::create([
            'en' => [
                'title'       => $request->en_title,
                'description'       => $request->en_description
            ],
            'sq' => [
                'title'       => $request->sq_title,
                'description'       => $request->sq_description
            ],
            'sr' => [
                'title'       => $request->sr_title,
                'description'       => $request->sr_description
            ],
            'filename' => $file_name,
            'filetype' => $file_type,
            'filesize' => $file_size,
            'filepath' => $directoryName,
            'image' => $file_path
        ]);
        return redirect()->route('collegium.index')->with(['status' => __('messages.Created Successfully')]);
    }

    public function show($id)
    {
        $collegium = Collegium::findOrFail($id);
        $headships = $collegium->officials->where('headship', true);
        return view('collegium.show', compact(['collegium', 'headships']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collegium  $collegium
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collegium = Collegium::findOrFail($id);
        return view('collegium.edit', compact('collegium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collegium  $collegium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Collegium::findOrFail($id)->update([
            'en' => [
                'title'       => $request->en_title,
                'description'       => $request->en_description
            ],
            'sq' => [
                'title'       => $request->sq_title,
                'description'       => $request->sq_description
            ],
            'sr' => [
                'title'       => $request->sr_title,
                'description'       => $request->sr_description
            ],
        ]);
        return redirect()->route('collegium.index')->with(['status' => __('messages.Updated Successfully')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collegium  $collegium
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Collegium::findOrFail($id)->delete();
        return redirect()->route('collegium.index')->with(['danger' => __('messages.Deleted Successfully')]);
    }
}
