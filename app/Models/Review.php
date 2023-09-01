<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'table_review';
    protected $fillable = ['content','star_number','user_id','logistic_id'];

    public function user(){
        $this->belongsTo(User::class,'user_id');
    }
    public function logistic(){
        $this->belongsTo(Logistic::class,'logistic_id');
    }
}
