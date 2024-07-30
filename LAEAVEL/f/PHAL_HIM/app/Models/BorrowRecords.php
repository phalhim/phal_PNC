<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BorrowRecords extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'book_id', 'borrow_date', 'return_date'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
    public function book(): BelongsTo
    {
        return $this->belongsTo(book::class, 'book_id', 'id');
    }
}
