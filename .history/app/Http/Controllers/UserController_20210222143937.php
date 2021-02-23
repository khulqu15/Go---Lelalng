<?php

namespace App\Http\Controllers;

use App\Mail\contactUs;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function contactUs(Request $request)
    {
        try {
            $email = new Email();
            $email->name = $request->name;
            $email->email = $request->email;
            $email->subject = $request->subject;
            $email->text = $request->text;
            $email->save();
            Mail::to('khusnul.ninno15@gmail')->send(new contactUs($email));
            return redirect()->back()->with('success', 'Email Sended');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th);
        }
    }
}
