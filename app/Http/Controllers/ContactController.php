<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',

        ]);

        // try {
            $mail_data = [
                'sender' => $request->email,
                'name' => $request->name,
                'subject' => $request->subject,
                'body' => $request->message,
            ];

            Mail::to('jacobs@datazen.online','Owner')
            ->send(new ContactMail($mail_data));

            return redirect()->back()->with('success', 'Email sent');

        // } catch (\Exception $e) {

        //     dd($e->getMessage());
        //     return redirect()->back()->withInput()->with('error', 'Check your internet connection');
        // }
        
    }
}
