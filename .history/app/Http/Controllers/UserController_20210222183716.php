<?php

namespace App\Http\Controllers;

use App\Mail\contactUs;
use App\Models\Email;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public $dimen;
    public $path;

    public function __construct()
    {
        $this->path = public_path().'/img/user/';
        $this->dimen = 750;
    }

    public function contactUs(Request $request)
    {
        try {
            $email = new Email();
            $email->name = $request->name;
            $email->email = $request->email;
            $email->subject = $request->subject;
            $email->text = $request->text;
            $email->save();
            Mail::to('yusufwahyu118@gmail.com')->send(new contactUs($email));
            return redirect()->back()->with('success', 'Email Sended');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th);
        }
    }

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            return redirect()->route('dashboard')->with('success', 'Login Berhasil');
        } else {
            return redirect()->back()->with('error', 'Email / Password Invalid');
        }
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $avatar = $request->file('avatar');
        $avatarName = str_replace(' ', '_', $request->name).'-'.time().'-'.uniqid().'.'.$avatar->extension();
        $img = Image::make($avatar->path());
        $img->resize($this->dimen, $this->dimen, function($constraint) {
            $constraint->aspectRatio();
        })->save($this->path.$avatarName);
        $user->avatar = $avatarName;
        $user->save();
        return redirect()->route('login')->with('success', 'Registration Success');
    }
}
