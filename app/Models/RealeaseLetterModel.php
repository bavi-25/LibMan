<?php

namespace App\Models;

use App\Models\StudentModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RealeaseLetterModel extends Model
{
    use HasFactory;
    protected $table = 'library_release_letters';
    protected $fillable = [
        'letter_code',
        'document_return',
        'status',
        'remarks',
        'student_id',
        'is_active',
    ];

    public function student()
    {
        return $this->belongsTo(StudentModel::class, 'student_id');
    }
}
