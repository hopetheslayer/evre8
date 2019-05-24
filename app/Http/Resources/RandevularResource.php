<?php

namespace App\Http\Resources;

use App\Models\Chat\Session;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class RandevularResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'name' => $this->psikolog->name,
            'sname' => $this->psikolog->sname,
            'email' => $this->email,
            'online' => false,
            'session' => $this->session_details($this->id),

        ];
    }
   //Radyo gibi düşün o kanalda eğer broadcast varsa çalışır' bunun içinde session her zaman bizim için kanal
    private function session_details($id)
    {
       $session =  Session::whereIn('user_id',[auth()->id(),$id])
            ->whereIn('psikolog_id',[auth()->id(),$id])->first();

       return new SessionResource($session);
    }
}
