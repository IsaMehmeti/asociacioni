<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Official;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
      
        $lang = app()->getLocale();
        $cities = array(
        'DEÇAN', 'DRAGASH', 'FERIZAJ', 'GJAKOVË', 'GJILAN', 'DRENAS', 'ISTOG', 'KAÇANIK', 'KAMENICË', 'NOVOBËRDË', 'KLINË', 'JUNIK', 'LIPJAN', 'MALISHEVË', 'MITROVICË', 'OBILIQ', 'PEJË', 'PODUJEVË', 'PRISHTINË', 'RAHOVEC', 'PRIZREN', 'SHTËRPCE', 'SKENDERAJ', 'PARTESH', 'RANILLUG', 'KLLOKOT', 'GRAÇANIC','MITROVICA E VERIUT');
          if ($lang == 'sr'){

            $cities = array(
        'DEÇAN', 'DRAGASH', 'UROSEVAC', 'GJAKOVË', 'GJILAN', 'DRENAS', 'ISTOG', 'KAÇANIK', 'KAMENICË', 'NOVOBËRDË', 'KLINË', 'JUNIK', 'LIPJAN', 'MALISHEVË', 'MITROVICË', 'OBILIQ', 'PEJË', 'PODUJEVË', 'PRISHTINË', 'RAHOVEC', 'PRIZREN', 'SHTËRPCE', 'SKENDERAJ', 'PARTESH', 'RANILLUG', 'KLLOKOT', 'GRAÇANIC','MITROVICA E VERIUT');
        }

        return view('city', compact('cities'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showofficials($city)
    {
        $officials = Official::whereTranslation('municipality', $city)->get();
        return view('showCity', compact(['officials', 'city']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
