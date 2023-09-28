<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehiclesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return ['id'=>(string)$this->id,
            'type'=>'Vehicles',
            'attributes'=>[
                'name'=>$this->name,
                'make'=>$this->make,
                'model'=>$this->model,
                'description'=>$this->description,
                'year_of_manufacture'=>$this->year_of_manufacture,
                'created_at'=>$this->created_at,
                'updated_at'=>$this->updated_at]
        ];
    }
}
