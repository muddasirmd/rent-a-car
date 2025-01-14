<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'doors' => $this->doors,
            'seats' => $this->seats,
            'speed' => $this->speed,
            'mode' => $this->mode,
            'short_description' => $this->short_description,
            'long_description' => $this->long_description,
            'rent' => $this->rent,
            'model_year' => $this->model_year,
            'status' => $this->status,
            'brand' => [ // Parent Record should be access like this; it's not accessible through parent resource collection
                'id' => $this->id,
                'name' => $this->name,
                'image'=> $this->image,
                'status' => $this->status
            ],
            'owner' => [
                // 'id'=> $this->id,
                // 'name'=> $this->name,

            ],
        ];
    }
}
