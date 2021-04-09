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
        ]);
        return redirect()->route('collegium.index')->with(['status' => __('messages.Created Successfully')]);
    }

    public function show(Collegium $collegium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collegium  $collegium
     * @return \Illuminate\Http\Response
     */
    public function edit(Collegium $collegium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collegium  $collegium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collegium $collegium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collegium  $collegium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collegium $collegium)
    {
        //
    }
}
