<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HandbagResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'style' => $this->getStyle(),
            'color' => $this->getColor(),
        ];
    }
}
