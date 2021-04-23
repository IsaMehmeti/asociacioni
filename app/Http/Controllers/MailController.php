<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Mail\NewUser;
use App\Models\Collegium;
use App\Models\Official;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $collegiums = Collegium::all();
        return view('mail', compact('collegiums'));
    }
    public function sendMailToOneUser(SendMailRequest $request)
    {
        $collegium = Collegium::findOrFail($request->collegium_id);
        if($collegium->officials->count() == 0){
            return redirect()->back()->with('danger', __("messages.This Collegium doesn't have any official"));
        }
        try {
        foreach ($collegium->officials as $user) {
        $data = ['subject' => $request->subject,
                 'from' => auth()->user()->email,
                 'body' => $request->body,
                 'user_name' => $user->name
                ];
        Mail::to($user->email)->send(new NewUser($data));
        }
        return redirect()->back()->with('status', __('messages.Mail Sent successfully'));
        }catch (\Exception $e) {
            report($e);
        return redirect()->route('home')->with('danger', __('messages.Something went wrong'));
        }
    }
}
