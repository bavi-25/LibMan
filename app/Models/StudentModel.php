<?php

namespace App\Models;

use App\Models\TransactionModel;
use App\Models\RealeaseLetterModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentModel extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'nis',
        'batch',
        'date_of_birth',
        'address',
    ];
    public function transactions()
    {
        return $this->hasMany(TransactionModel::class, 'student_id');
    }
    public function realeaseLetters(){
        return $this->hasMany(RealeaseLetterModel::class, 'student_id');
    }
}
