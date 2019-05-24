<?php

namespace App\Http\Controllers\Psikolog;

use App\Models\Randevular;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
class PsikologMusteriController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:psikolog');
    }

   public function index()
   {
       $randevu = Randevular::where('psikolog_id',Auth::id())->get();

       return view('backend.Psikolog.Danisan.index',compact('randevu'));
   }

   public function show($id)
   {

       $relations = [
           'randevus' => \App\Models\Randevular::where('user_id',$id)->get(),
       ];

        $musteri = User::find($id);

       return view('backend.Psikolog.Danisan.show',compact('musteri')+$relations);

   }

   public function create()
   {
       return view('backend.Psikolog.Danisan.create');
   }


   public function edit($id)
   {
       $musteri = User::find($id);

       return view('backend.Psikolog.Danisan.edit',compact('musteri'));
   }

   public function update(Request $request,$id)
   {
       $data = request()->only(  'name','email','sname','adres','telno');


       $giris = User::where('id',$id)->firstOrFail();

       $giris->update($data);
       Toastr::success('Danışan Bilgileri Güncellendi','Success');
       return redirect()->route('Danisan.index');

   }

   public function destroy($id)
   {
       Randevular::find($id)->delete();
       Toastr::warning('Danışan Silindi','Success');
       return redirect()->route('Danisan.index');
   }
}
