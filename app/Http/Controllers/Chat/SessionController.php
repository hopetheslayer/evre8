<?php

namespace App\Http\Controllers\Chat;

use App\Events\SessionEvent;
use App\Http\Resources\SessionResource;
use App\Models\Chat\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:danisan');
    }

   public function create(Request $request)
   {
   // $session =  Session::create(['user_id'=>auth()->id(),'psikolog_id'=>$request->friend_id]);

       $session = new Session();

       $session->user_id = Auth::id();

       $session->psikolog_id = $request->friend_id;

       $session->save();

       $modifiedSession = new SessionResource($session);
       broadcast(new SessionEvent($modifiedSession, auth()->id()));
       return $modifiedSession;

   }
}
