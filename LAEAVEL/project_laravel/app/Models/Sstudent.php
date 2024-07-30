<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sstudent extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'age',
        'phone',
        'email',
    ];
}
