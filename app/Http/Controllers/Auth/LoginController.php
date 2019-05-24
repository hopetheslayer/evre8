<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Psikolog;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:psikolog')->except('logout');
    }

    public function authenticated(Request $request, $psikolog)
    {
        $psikolog = new Psikolog();

        $psikolog->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp()
        ]);
        if (!$psikolog->verified) {
            auth()->logout();
            return back()->with('warning', 'Hesabınızı Kontrol Etmelisiniz. gerekli olan kodu size ulastırdık, lütfen mailnizi kontrol ediniz.');
        }
        return redirect()->intended($this->redirectPath());


    }
}
