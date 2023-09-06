<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logistic extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'logistics';
    protected $fillable = ['order_number','customer_name','expected_delivery_date','recipient_address','shipping_address','shipping_date'];
}