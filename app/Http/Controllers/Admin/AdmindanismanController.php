<?php

namespace App\Http\Controllers\Admin;

use App\Models\Danisman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdmindanismanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

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
            $danismans = Db::table('danismans')->where('ban',0)->get();
        }

        return  view('backend.Admin.Hesaplar.danisman.index',compact('danismans'));
    }

    public function form()
    {
        return view('backend.Admin.Hesaplar.danisman.create');
    }

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

        Danisman::create($request->all());



        return redirect()->route('hesaplar.danisman.users');

    }

    public function show($id)
    {
        $danisman = Danisman::find($id);
        return view('backend.Admin.Hesaplar.danisman.show',compact('danisman'));
    }

    public function edit($id)
    {
        $danisman = Danisman::find($id);

        return view('backend.Admin.Hesaplar.danisman.edit',compact('danisman'));
    }

    public function update(Request $request,$id)
    {

        $data = request()->only(  'name','email','kulad','sname','dt','adres','telno','tcno','gsor');

        $data['ban'] = request()->has('ban-durum') ? 1: 0;

        $giris = Danisman::where('id',$id)->firstOrFail();

        $giris->update($data);

        return redirect()->route('psikolog.users');
    }


    public function sil($user)
    {
        $danisman = Danisman::findOrFail($user);
        $danisman->delete();


        return redirect()->route('hesaplar.danisman.users');
    }

}
