<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RorrowRecorsListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->user_id,
            'book_id' => $this->book_id->id,
            'borrow_date' => $this->borrow_date,
            'return_date' => $this->return_date
        ];
    }
}
