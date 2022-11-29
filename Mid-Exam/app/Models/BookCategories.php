<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategories extends Model
{
    use HasFactory;

    public function BookClass()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function CategoriesClass()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
