<?php

namespace App\Http\Controllers;

use App\Models\Collegium;
use App\Models\Official;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officials = Official::all();
        return view('official.index', compact('officials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collegiums = Collegium::all();
        return view('official.create', compact('collegiums'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->sr_municipality);
        Official::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'collegium_id' => $request->collegium_id,
            'en' => ['municipality'=>$request->en_municipality],
            'sq' => ['municipality'=> $request->sq_municipality],
            'sr' => ['municipality'=> $request->sr_municipality],
        ]);

        return redirect()->back()->with(['status' => __('messages.Created Successfully')]);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
