<?php

namespace App\Http\Controllers\Psikolog;

use App\Http\Requests\StoreRandevuRequest;
use App\Models\CalismaSaatleri;
use App\Models\Psikolog;
use App\Models\Randevular;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Models\PsikologTakvim;
use MaddHatter\LaravelFullcalendar\Event;
class PsikologtakvimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:psikolog');
    }

    public function index()
    {
        $user_id = auth()->id();



        $randevular = Randevular::Where('psikolog_id',$user_id)->get();

        return view('backend.Psikolog.takvim.calendar',compact('randevular'));
    }


    public function show($id)
    {
        $randevular = Randevular::findOrFail($id);

        return view('backend.Psikolog.takvim.show',compact('randevular'));
    }

    public function edit($id)
    {
        $randevular = Randevular::findOrFail($id);
        return view('backend.Psikolog.takvim.edit',compact('randevular'));
    }
    public function create()
    {
        $randevu = Randevular::where('psikolog_id',Auth::id())->get();
        $psikolog = Psikolog::where('verified',1)->get();
        return view('backend.Psikolog.takvim.create',compact('randevu','psikolog'));
    }

    public function store(StoreRandevuRequest $request)
    {



    $calisma_saat = CalismaSaatleri::where('psikolog_id',$request->psikolog_id)
        ->whereDay('date','=', date("d", strtotime($request->date)))
        -> whereTime('start_time', '<=', date("H:i", strtotime("".$request->starting_hour.":".$request->starting_minute.":00")))
        ->whereTime('finish_time', '>=', date("H:i", strtotime("".$request->finish_hour.":".$request->finish_minute.":00")))->get();

    //    $randevu = Randevular::create([
     //       'user_id' => Auth::user()->id ,  // $request->title also works?
     //       'user_id' => Auth::user()->id
     //       'psikolog_id' => $request['psikolog_id'], // $request->body also works?
     //       'psikolog_id' => $request['psikolog_id'],
     //       'psikolog_id' => $request['psikolog_id'],
     //       'psikolog_id' => $request['psikolog_id'],
     //        // there might be a better solution, but this works 100%
      //  ]);


        $randevu->user_id = $request->user_id;
        $randevu->psikolog_id = $request->psikolog_id;
        $randevu->start_time = $request->date;
        $randevu->finish_time =$request->date;
        $randevu->comments = $request->comments;
        $randevu->save();

        return redirect()->route('Takvim.index');

    }

    public function update(Request $request,$id)
    {
        request()->validate([
            'telno' =>'required',
            'adres' =>'required',
            'pname' =>'required',
            'psname' => 'required',
            'hesaptip' =>'required',
            'iban' =>'required | min:10',
        ]);

        $randevular = new Randevular();


        $banka_bilgis->bankad = request('bankad');


        return redirect()->route('Takvim.index');
    }

    public function destroy($id)
    {

        Randevular::find($id)->delete();

        Toastr::warning('Randevu Silindi','Success');
        return redirect()->route('Takvim.index');
    }


}
