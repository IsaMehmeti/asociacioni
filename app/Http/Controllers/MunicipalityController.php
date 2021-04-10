<?php 
namespace App\Http\Controllers;

use App\Models\Municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{

    public function index()
    {
        $cities = Municipality::all();
        return view('city', compact('cities'));  
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        
    }

}