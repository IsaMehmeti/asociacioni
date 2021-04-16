<?php

namespace App\Http\Controllers;

use App\Mail\NewUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('mail', compact('users'));
    }
    public function sendMailToOneUser(Request $request)
    {
        $user = User::findOrFail($request->user_id);
                $data = ['subject' => $request->subject,
                         'from' => auth()->user()->email,
                         'body' => $request->body,
                         'user_name' => $user->name
                    ];
        try {
        Mail::to($user->email)->send(new NewUser($data));
        return redirect()->route('home')->with('status', 'Mail Sent successfully');
        }catch (\Exception $e) {
            report($e);
            return false;
        }
    }

    public function test(Request $request)
    {

    }
}
