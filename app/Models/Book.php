<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = ['id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function bookCategory()
    {
        return $this->belongsTo(BookCategory::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
