<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function show()
    {
        return view('login.index');
    }

    public function create()
    {
      if(!auth()->attempt(request(['email', 'password']))) {
          return back()
                 ->withErrors([
                     'message' => 'Wrong email or password',
                 ]);
      }
      return redirect('/teams');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
