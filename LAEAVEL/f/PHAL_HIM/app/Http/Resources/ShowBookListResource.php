<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowBookListResource extends JsonResource
{

    
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'author'=>$this->author,
            'gener'=>$this->gener,
            'publisd_year'=>$this->publisd_year,
        ];
    }
}
