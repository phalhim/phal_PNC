<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'total_price'];

    public function orderProducts():HasMany
    {
        return $this->HasMany(OrderProduct::class);
    }
}
