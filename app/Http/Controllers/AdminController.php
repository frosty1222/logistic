<?php

namespace App\Http\Controllers;

use App\Models\Logistic;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function shippingView(){
      $data = Logistic::paginate(10);
      return view('admin/shipping-view',compact('data'));
   }
}
