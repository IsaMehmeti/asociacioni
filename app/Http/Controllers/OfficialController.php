<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfficialStoreRequest;
use App\Models\Collegium;
use App\Models\Official;
use App\Models\Municipality;
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
        $headships = Official::where('headship', true)->get();
        return view('official.index', compact(['officials', 'headships']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collegiums = Collegium::all();
        $cities = Municipality::all();
        return view('official.create', compact(['collegiums', 'cities']));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfficialStoreRequest $request)
    {
        Official::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'collegium_id' => $request->collegium_id,
            'phone' => $request->phone,
            'municipality_id'=>$request->municipality_id,
        ]);

        return redirect()->back()->with(['status' => __('messages.Created Successfully')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByCity($city)
    {
        $city = Municipality::whereTranslation('name', $city)->firstOrFail();
        return view('showCity', compact('city'));
    }

    public function edit($id)
    {
        //
    }

    public function archiveIndex()
    {
        $officials = Official::onlyTrashed()->get();
        return view('official.archive', compact('officials'));
    }

    public function addToHeadShip($id)
    {
        $official = Official::findOrFail($id);
        $official->headship = true;
        $official->save();
        return redirect()->back()->with(['status' => __('messages.Updated Successfully')]);
    }
    public function removeFromHeadship($id)
    {
        $official = Official::findOrFail($id);
        $official->headship = false;
        $official->save();
        return redirect()->back()->with(['danger' => __('messages.Updated Successfully')]);
    }

    public function update($id)
    {
        Official::withTrashed()->findOrFail($id)->restore();
        return redirect()->back()->with(['warning' => __('messages.Returned Successfully')]);
    }
    public function destroy($id)
    {
        $official = Official::findOrFail($id);
        $official->headship = false;
        $official->save();
        $official->delete();
        return redirect()->back()->with(['status' => __('messages.Archived Successfully')]);
    }
}
