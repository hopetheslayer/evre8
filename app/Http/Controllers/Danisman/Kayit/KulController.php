<?php

namespace App\Http\Controllers\Danisman\Kayit;

use App\Models\Danisman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class KulController extends Controller
{
    public function kayıt_form()
    {
        return view('backend.Danisman.auth.danisman-kayit');
    }

    public function kayit(Request $request)
    {
        $this->validate(request(), [
            'name' =>'required|min:5|max:60',
            'email' =>'required|email|unique:kullanici',
            'password' =>'required|confirmed|min:5|max:15',
            'sname' =>'required|min:5|max:60',
        ]);


        $danisman = Danisman::create(
            [
                'name' => request('name'),
                'sname' => request('sname'),
                'email' => request('email'),
                'password' => Hash::make(request('sifre')),
            ]);

        $danisman->save(new Danisman());

        auth()->login($danisman);

        return redirect()->route('danisman.dashboard');
    }
}
