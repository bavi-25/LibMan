<?php

namespace App\Models;

use App\Models\StudentModel;
use App\Models\TransactionDetailModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionModel extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'transaction_code',
        'transaction_date',
        'classroom',
        'description',
        'remarks',
        'is_active',
        'student_id',
    ];
    public function student()
    {
        return $this->belongsTo(StudentModel::class, 'student_id');
    }
    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetailModel::class, 'transaction_id');
    }
}
