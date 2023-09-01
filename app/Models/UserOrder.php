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
        $this->belongsTo(User::class,'user_id');
    }
    public function logistic(){
        $this->belongsTo(Logistic::class,'logistic_id');
    }
}
