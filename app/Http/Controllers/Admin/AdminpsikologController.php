<?php

namespace App\Http\Controllers\Admin;

use App\Models\Psikolog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminpsikologController extends Controller
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
            $psikologs = Db::table('psikologs')->where('ban',0)->get();
        }

        return  view('backend.Admin.Hesaplar.psikolog.index',compact('psikologs'));
    }


    public function form()
    {
        return view('backend.Admin.Hesaplar.psikolog.create');
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

        Psikolog::create($request->all());



        return redirect()->route('psikolog.users');

    }

    public function show($id)
    {
        $psikolog = Psikolog::find($id);
        return view('backend.Admin.Hesaplar.psikolog.show',compact('psikolog'));
    }

    public function edit($id)
    {
        $psikolog = Psikolog::find($id);

        return view('backend.Admin.Hesaplar.psikolog.edit',compact('psikolog'));
    }


    public function update(Request $request, $id)
    {

        $data = request()->only(  'name','email','kulad','sname','dt','adres','telno','tcno','gsor');


        $data['verified'] = request()->has('verified') ? 1 : 0;
        $data['ban'] = request()->has('ban-durum') ? 1: 0;



        $giris = Psikolog::where('id',$id)->firstOrFail();

        $giris->update($data);





        return redirect()->route('psikolog.users');

    }
}
