<?php

namespace App\Http\Controllers\Danisan\Giris;

use App\Http\Resources\PsikologResource;
use App\Http\Resources\RandevularResource;
use App\Http\Resources\UserResource;
use App\Models\Psikolog;
use App\Models\Randevular;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class DanisanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:danisan');
    }

    public function index()
    {

        //return new UserResource(auth()->user());

        return view('backend.Danisan.danisan-panel');
    }


    public function getFriends()
    {

        //kullanıcıyı danışmanlık hizmeti alınan randevuya dahil eder,
        // Model yapısında bindlandığı içinde Randevular Resource'ta vue
        // componente gönderilecek kod belirlenir.
  // return    RandevularResource::collection(Randevular::where('user_id',auth()->id())->get());
        return    UserResource::collection(User::where('id', '!=', auth()->id())->get());


    }
}
