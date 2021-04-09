<?php

namespace App\Http\Controllers;

use App\Models\Collegium;
use Illuminate\Http\Request;

class CollegiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('collegium.index')->with(['collegiums' => Collegium::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collegium.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect()->route('collegium.index')->with(['status'=> __('messages.Created Successfully')]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collegium  $collegium
     * @return \Illuminate\Http\Response
     */
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
