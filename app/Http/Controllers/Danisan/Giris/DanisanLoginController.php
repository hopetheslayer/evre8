<?php

namespace App\Http\Controllers\Danisan\Giris;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DanisanLoginController extends Controller
{
    public function __construct()
    {

        $this->middleware('guest:danisan',['except' => ['logout']]);
    }

    public function showLoginForm() {

        return view('backend.Danisan.auth.danisan-login');
    }

    public function login(Request $request) {

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('danisan')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){

            return redirect()->intended(route('danisan.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('danisan')->logout();

        return redirect()->route('anasayfa');
    }
}
