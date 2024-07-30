<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id', 'qty'];

    public function order():BelongsTo
    {
        return $this->BelongsTo(Order::class);
    }
}
