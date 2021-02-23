<?php

namespace App\Http\Controllers;

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
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th);
        }
    }
}
