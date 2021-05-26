<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Jobs\DeleteFile;
use App\Jobs\SendEmailsJob;
use App\Mail\NewUser;
use App\Models\Collegium;
use App\Models\Official;
use App\User;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index($collegium_id = null)
    {
        $collegiums = Collegium::all();
        if ($collegium_id != null){
            $selectedCollegium = Collegium::findOrFail($collegium_id);
        return view('mail', compact(['collegiums', 'collegium_id', 'selectedCollegium']));
        }
        return view('mail', compact(['collegiums', 'collegium_id']));
    }
    public function sendMailToOneUser(SendMailRequest $request)
    {
        $request->validate([
        'file' => 'sometimes|file|max:5000',
        ]);
        try {
            //if request has file store file
            (!$request->file('file')) ? : $this->storeFile($request);

        foreach ($request->user_ids as $user_id) {
            $user = Official::find($user_id);
                $data = ['subject' => $request->subject,
                    'from' => 'noreplay@kolegjiumet.komunat-ks.net',
                 'to' => $user->email,
                 'body' => $request->body,
                 'user_name' => $user->name,
                 'locale' => app()->getLocale(),
                 'file' => (!$request->file('file')) ? 'false' : public_path('files/'.$request->file('file')->getClientOriginalName()),
                ];
                $job =  (new SendEmailsJob($data))->delay(\Carbon\Carbon::now()->addSecond(3));
                dispatch($job);

            (!$request->file('file')) ? : $this->deleteFile($request);
        }
        return redirect()->back()->with('status', __('messages.Mail Sent successfully'));
        }catch (\Exception $e) {
            report($e);
        return redirect()->route('home')->with('danger', __('messages.Something went wrong'));
        }
    }

    public function storeFile($request)
    {
        $file = $request->file('file');
        $file->move(public_path('files'), $file->getClientOriginalName());
    }

    public function deleteFile($request)
    {
        $deleteFile = (new DeleteFile($request->file('file')->getClientOriginalName()))->delay(\Carbon\Carbon::now()->addSecond(15));
        dispatch($deleteFile);
    }
}
