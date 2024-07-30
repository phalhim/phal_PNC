<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory,SoftDeletes;
    public function users(): HasMany
    {
        return $this->HasMany(user::class);
    }
    protected $fillable = [
        'title',
        'author',
        'gener',
        'publisd_year'
    ];
}
