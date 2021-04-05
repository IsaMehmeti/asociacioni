<?php

namespace App\Http\Controllers;

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
        Mail::send([], [], function ($message) use($user, $request) {
            $message->to($user->email)
                ->subject($request->subject)
                ->from(auth()->user()->email)
                ->setBody($request->body);
        });
        return redirect()->route('home')->with('status', 'Mail Sent successfully');
    }
}
