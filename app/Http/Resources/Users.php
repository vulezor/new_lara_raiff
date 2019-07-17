<?php

namespace App\Http\Resources;
use App\Http\Resources\Role as RoleResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Users extends JsonResource
{
   /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'last_name'=>$this->last_name,
            'email' => $this->email,
            'place_id' => $this->place_id,
            'wearehouse_id' => $this->wearehouse_id,
            'address' => $this->address,
            'jmbg' => $this->jmbg,
            'role_id'=>$this->role_id,
            'role'=> new RoleResource($this->role),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
