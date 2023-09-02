<?php

namespace App\Http\Controllers;

use App\Models\Logistic;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviewForm($id){
        $data = Logistic::find($id);
        return view('shipping/review',compact('data'));
    }
    public function postReview(Request $request){
       if($request){
          $createREview = Review::create($request->all());
          if($createREview){
             return redirect()->back()->with('success','Thank you for your review . it helps motivate us to create a better logistic system');
          }
          else{
             return redirect()->back()->with('unsuccess','Something went wrong. please try again later');
          }
       }
    }
}
