<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibrarianModel extends Model
{
    use HasFactory;
    protected $table = 'librarian';
    protected $fillable = [
        'nik',
        'is_active',
    ];
}
