<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'review';
    protected $fillable = ['content','star_number','order_number'];
    public function logistic(){
        return $this->belongsTo(Logistic::class,'order_number','order_number');
    }
}
