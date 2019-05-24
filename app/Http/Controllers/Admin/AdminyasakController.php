<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AdminyasakController extends Controller
{

    public function index()
    {
        //user tablosunda ki ban satırına bakar , banlıysa getirir.

        $users = Db::table('users')->where('ban',1)->get();

    return view('backend.Admin.Hesaplar.yasaklanan.index',compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('backend.Admin.Hesaplar.yasaklanan.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('backend.Admin.Hesaplar.yasaklanan.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {

        $data = request()->only(  'name','email','kulad','sname','dt','adres','telno','tcno','gsor');


        $data['verified'] = request()->has('verified') ? 1 : 0;

        $data['ban'] = request()->has('ban-durum') ? 1: 0;



        $giris = User::where('id',$id)->firstOrFail();

        $giris->update($data);





        return redirect()->route('yasak.users');

    }
}
