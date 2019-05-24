<?php

namespace App\Http\Controllers\Admin;

use App\Models\Randevular;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mailers\AppMailer;

class AdminrandevuController extends Controller
{
   public function index()
   {
       $randevu = Randevular::all();




       return view('backend.Admin.Randevu.index',compact('randevu'));
   }

   public function show()
   {

   }

   public function create()
   {

   }

   public function store()
   {

   }

   public function edit($id)
   {

       $randevu = Randevular::find($id);

        return view('backend.Admin.Randevu.edit',compact('randevu'));
   }

   public function update()
   {

   }

   public function destroy($id, AppMailer $mailer)
   {

       $randevu = Randevular::findOrFail($id);

       $randevu->delete();

       $randevuowner = $randevu->psikolog;

       $mailer->sendRandevuStatusNotificaiton($randevuowner,$randevu);



       Toastr::success('Randevu Silindi :)','Success');
       return redirect()->route('Admin-randevular.index');
   }
}
