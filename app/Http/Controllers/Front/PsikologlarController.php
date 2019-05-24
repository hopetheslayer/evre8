<?php

namespace App\Http\Controllers\Front;

use App\Models\Psikolog;
use App\Models\Tema\TemaAyarları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PsikologlarController extends Controller
{
    public function index()
    {
        $ayar = TemaAyarları::all();

        $psikolog = Psikolog::all();

        return view('frontend.psikologlar.front-psikolog-page',compact('ayar','psikolog'));
    }
}
