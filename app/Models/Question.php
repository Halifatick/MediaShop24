<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = ['type_id', 'name', 'phone', 'order_id', 'question', 'file', 'answer'];
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
    public function types()
    {
        return $this->belongsTo(QuestionType::class);
    }
}
