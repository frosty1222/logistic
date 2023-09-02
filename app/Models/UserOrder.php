<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;
    protected $table = 'user_orders';
    protected $fillable = ['status','user_id','logistic_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function logistic(){
        return $this->belongsTo(Logistic::class,'logistic_id','id');
    }
}
