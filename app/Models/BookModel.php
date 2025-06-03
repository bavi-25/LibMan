<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'code',
        'title',
        'author',
        'published_date',
        'isbn',
        'pages',
        'description',
        'is_active',
    ];
}
