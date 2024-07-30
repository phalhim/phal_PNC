<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory,SoftDeletes;
    public function books(): HasMany
    {
        return $this->HasMany(book::class);
    }
    protected $fillable = [
        'id',
        'name',
        'email'
    ];
}
