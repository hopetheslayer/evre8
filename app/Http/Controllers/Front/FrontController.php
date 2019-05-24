<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog\Blog;
use App\Models\Psikolog;
use App\Models\Tema\AnasayfaAyarları;
use App\Models\Tema\TemaAyarları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{

    public function front()
    {
        //anasayfa conem

        $ayar = TemaAyarları::all();

        $anasayfa = AnasayfaAyarları::all();

        $blog = Blog::where('yayın',1)->orderBy(DB::raw('RAND()'))->paginate(3);

        $psikolog = Psikolog::where('verified',1)->get();



        return view('frontend.front-main-page',compact('ayar','anasayfa','blog','psikolog'));
    }
}
