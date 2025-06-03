<?php

namespace App\Models;

use App\Models\TransactionModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetailModel extends Model
{
    use HasFactory;
    protected $table = 'transaction_details';
    protected $fillable = [
        'return_date',
        'actual_return_date',
        'status',
        'transaction_id',
        'book_id',
    ];

    public function transaction()
    {
        return $this->belongsTo(TransactionModel::class, 'transaction_id');
    }
}
