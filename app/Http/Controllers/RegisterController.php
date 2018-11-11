<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function show()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), User::VALIDATION_RULES);
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->verification_code = str_random();
        $user->save();
        //auth()->login($user);
        Mail::to($user)->send(new ConfirmationMail($user));

        session()->flash('message', 'Now You need to verify your mail. We sent verification code at ' . $user->email);

        return redirect('/login');


    }
    public function verifie($secret_code)
    {
        $user = User::where('verification_code', request('secret_code'));
        $user->update([
          'verification_code' => null,
           'email_verified_at' => now(),
            'is_verified' => 1
        ]);
        session()->flash('message', 'Your account is verified now');
       return redirect('/login');//->with('message', 'You are verified. Sign in now');

    }
}
