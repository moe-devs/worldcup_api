<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'    =>  $this->id,
            'groupStage'    =>  $this->group_stage,
            'countries'      =>  CountryResource::collection($this->whenLoaded('countries'))  // This line means if there is a invoices show it if not don't
        ];
    }
}
