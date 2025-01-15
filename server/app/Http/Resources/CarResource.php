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
            'uuid' => $this->uuid,
            'name' => $this->name,
            'image' => asset($this->image),
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
                'uuid' => $this->brand->uuid,
                'slug' => $this->brand->slug,
                'name' => $this->brand->name,
                'image'=> asset($this->brand->image),
                'status' => $this->brand->status
            ],
            'owner' => [
                // 'id'=> $this->id,
                // 'name'=> $this->name,

            ],
        ];
    }
}
