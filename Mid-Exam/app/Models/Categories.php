<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function BookCategories()
    {
        return $this->hasMany(BookCategories::class, 'category_id', 'id');
    }
}
