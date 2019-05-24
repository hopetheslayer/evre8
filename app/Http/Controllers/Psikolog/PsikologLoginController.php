<?php

namespace App\Http\Controllers\Psikolog;


use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;


class PsikologLoginController extends Controller
{

    use AuthenticatesUsers;


    public function __construct()
    {

        $this->middleware('guest:psikolog',['except' => ['logout']]);
    }

    public function showLoginForm() {

        return view('backend.Psikolog.auth.psikolog-login');
    }

    public function login(Request $request) {

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('psikolog')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){




            return redirect()->intended(route('psikolog.dashboard'));
        }
        $request->session()->regenerate();
        return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logout()
    {
        Auth::guard('psikolog')->logout();

        return redirect()->route('anasayfa');
    }

    public function authenticated(Request $request, $user)
    {

        $user->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp()
        ]);



    }
}
