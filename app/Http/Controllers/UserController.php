<?php

namespace App\Http\Controllers;

use App\Models\Logistic;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function reviewForm($id){
        $data = Logistic::find($id);
        return view('shipping/review',compact('data'));
    }
}
