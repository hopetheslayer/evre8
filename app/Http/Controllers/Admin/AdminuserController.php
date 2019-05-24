<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminuserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //Kullanıcıları listeler
    public function index()
    {

        if(request()->filled('aranan'))
        {
            $aranan = request('aranan');
            $users = User::where('ad','like', "%$aranan%")
                ->orWhere('email','like',"%$aranan%")
                ->orderByDesc('created_at')
                ->paginate(8);

        }
        else{
            $users = Db::table('users')->where('ban',0)->get();
        }

        return  view('backend.Admin.Hesaplar.users.index',compact('users'));
    }

    //Kullanıcı Oluşturmak için form eventına gider

    public function form()
    {
        return view('backend.Admin.Hesaplar.users.create');
    }


    //Kullanıcı Kayıt etmek için

    public function kaydet(Request $request)
    {
        request()->validate([
            'name' =>'required',
            'sname' =>'required',
            'kulad' =>'required',
            'tcno' =>'required',
            'email' =>'required',
            'password' =>'required',
            'dt' =>'required',
            'adres' =>'required',
            'telno' =>'required',
            'gsor' =>'required',

        ]);

        User::create($request->all());



        return redirect()->route('hesaplar.users');

    }

    public function show($id)
    {
        $user = User::find($id);
        return view('backend.Admin.Hesaplar.users.show',compact('user'));
    }

    //Kullanıcı Düzenler

    public function edit($id)
    {
        $user = User::find($id);

        return view('backend.Admin.Hesaplar.users.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $data = request()->only(  'name','email','kulad','sname','dt','adres','telno','tcno','gsor');

        $data['ban'] = request()->has('ban-durum') ? 1: 0;

        $data['verified'] = request()->has('verified') ? 1:0;

        $giris = User::where('id',$id)->firstOrFail();

        $giris->update($data);

        return redirect()->route('hesaplar.users');
    }

    //Kullanıcı Siler
    public function sil($user)
    {
       $user = User::findOrFail($user);
       $user->delete();


        return redirect()->route('hesaplar.users');
    }


}
