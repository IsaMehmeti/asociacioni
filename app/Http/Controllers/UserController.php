<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('user.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//
//    }


    public function update(UserUpdateRequest $request)
    {
        $this->validate($request,['old_password' => [
            'required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, auth()->user()->password)) {
                    $fail(__('messages.Old Password didn\'t match'));
                }
            },
        ]]);
        $user = auth()->user();

        $user->name = $request->name;
        $user->email = $request->email;

        if($request->password){

            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->back()->with(['status'=>'Updated Successfully']);
    }

    public function destroy($id)
    {
        $user = auth()->user();
        $user->delete();
        return redirect()->back();
    }

}
