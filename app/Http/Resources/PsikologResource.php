<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PsikologResource extends JsonResource
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
         'name' => $this->name,
         'sname' => $this->sname,
         'email' => $this->email,
         'online' => false,
         'session' => [
             'open' => false
         ]
     ];
    }
}
