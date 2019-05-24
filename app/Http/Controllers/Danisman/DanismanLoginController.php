<?php

namespace App\Http\Controllers\Danisman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Session;

class DanismanLoginController extends Controller
{

    public function __construct()
    {

        $this->middleware('guest:danisan',['except' => ['logout']]);
    }

    public function showLoginForm() {

        return view('backend.Danisman.auth.danisman-login');
    }

    public function login(Request $request) {

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('danisan')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){

            return redirect()->intended(route('danisman.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('danisman')->logout();

        return redirect()->route('anasayfa');
    }
}
