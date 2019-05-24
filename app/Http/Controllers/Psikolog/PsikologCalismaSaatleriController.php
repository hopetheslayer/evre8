<?php

namespace App\Http\Controllers\Psikolog;

use App\Http\Requests\CalismaSaatEkle;
use App\Http\Requests\CalismaSaatleriGuncelle;
use App\Models\CalismaSaatleri;
use App\Models\Psikolog;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PsikologCalismaSaatleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:psikolog');
    }

    public function index()
    {
        //Sadece sisteme giriş yapmıs psikoloğun takvimini gösterir.
        $user_id = auth()->id();

        $calisma_saatleri = CalismaSaatleri::Where('psikolog_id',$user_id)->get();





        return view('backend.Psikolog.calismasaatleri.index',compact('calisma_saatleri'));
    }

    public function show($id)
    {
        $relations = [
            'psikologs' => \App\Models\Psikolog::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];

        $working_hour = CalismaSaatleri::findOrFail($id);

        return view('backend.Psikolog.calismasaatleri.show', compact('working_hour') + $relations);
    }

    public function create()
    {
        $relations = [
            'psikologs' => \App\Models\Psikolog::get(),
        ];

        return view('backend.Psikolog.calismasaatleri.create',$relations);
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'date' => 'required',
            'start_time' => 'required',
            'finish_time' => 'required',
        ]);

        $working_hour = new CalismaSaatleri;

        $working_hour->date = request('date');
        $working_hour->start_time = request('start_time');
        $working_hour->finish_time = request('finish_time');

        $working_hour->psikolog_id = auth()->id();
        $working_hour->save();

        Toastr::success('Calısma Saatini Eklendi','Success');

        return redirect()->route('Calisma-Saatleri.index');
    }


    public function edit($id)
    {
        $user_id = auth()->id();
        $relations = [

            'employees' => \App\Models\Psikolog::get()->pluck('name',$user_id)->prepend('Please select', ''),
        ];

        $working_hour = CalismaSaatleri::findOrFail($id);

        return view('backend.Psikolog.calismasaatleri.edit', compact('working_hour')+$relations);
    }

    public function update(Request $request,$id)
    {

        $request->validate([
            'date' => 'required',
            'start_time' => 'required',
            'finish_time' => 'required',
        ]);

        $calisma = CalismaSaatleri::find($id);
        $calisma->date = $request->get('date');
        $calisma->start_time = $request->get('start_time');
        $calisma->finish_time = $request->get('finish_time');
        $calisma->save();



        Toastr::success('Calısma Saatiniz Güncellendi :)','Success');
        return redirect()->route('Calisma-Saatleri.index');
    }





    public function destroy($id)
    {

        $working_hour = CalismaSaatleri::findOrFail($id);
        $working_hour->delete();
        Toastr::success('Calısma Saatiniz Silindi :)','Success');
        return redirect()->route('Calisma-Saatleri.index');
    }

}
