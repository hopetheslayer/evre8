<?php

namespace App\Http\Controllers\Front;


use App\Mail\KullaniciKayitMail;
use App\Mail\PsikologKayitMail;
use App\Models\Psikolog;
use App\Models\Tema\TemaAyarları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\PsikologDetay;
use Illuminate\Support\Facades\Mail;

class PsikologKayitController extends Controller
{

    public function getCountries()
    {
        $ayar = TemaAyarları::all();
        $countries = DB::table('countries')->pluck("name","id");
        return view('frontend.kayit.psikolog-kayit',compact('countries','ayar'));
    }

    public function getStates($id)
    {
        $states = DB::table("states")->where("countries_id",$id)->pluck("name","id");
        return json_encode($states);
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' =>'required|min:2|max:60',
            'sname' =>'required|min:2|max:60',
            'telno' =>'required|min:5|max:60',
            'email' =>'required|email|unique:psikologs',
            'password' =>'required|min:5|max:15',
            'country' => 'required',
        ]);

        $psikolog = new Psikolog();

        $psikolog->name = request('name');
        $psikolog->sname = request('sname');
        $psikolog->telno = request('telno');
        $psikolog->email = request('email');
        $psikolog->password = Hash::make($request['password']);
        $psikolog->il = request('country');
        $psikolog->ilce = request('state');
        $psikolog->verified =0;


        $psikolog->save();

        $psikolog->psdetay()->save(new PsikologDetay());



       // Mail::to(request('email'))->send(new PsikologKayitMail($psikolog));

        auth()->login($psikolog);

        return redirect()->route('psikolog.dashboard');


    }



}
