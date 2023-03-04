<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
  public function index()
  {
    if (Auth::user()) {
      return redirect()->route('home');
    } else {
      return view('auth.register');
    }    
  }
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|alpha',
      'email' => 'required|email',
      'password' => [
        'required',
        'confirmed',
        Password::min(8)
        ->symbols()
      ]
    ]);

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();
        
    auth()->login($user);

    return redirect()->intended('home');
  }
}
