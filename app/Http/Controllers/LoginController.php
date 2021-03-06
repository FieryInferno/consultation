<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function auth(Request $request)
  {
    $credentials = $request->validate([
      'username'  => ['required'],
      'password'  => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended('admin');
    }

    return back()->withErrors([
      'username'  => 'The provided credentials do not match our records.',
    ])->onlyInput('username');
  }
}
