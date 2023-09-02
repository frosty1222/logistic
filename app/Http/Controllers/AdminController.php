<?php

namespace App\Http\Controllers;

use App\Models\Logistic;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
   public function shippingView(){
      $data = Logistic::paginate(10);
      $myService = app('myService');
      $role = $myService->getRole();
      return view('admin/shipping-view',compact('data','role'));
   }
   public function shippingList(){
      $myService = app('myService');
      $role = $myService->getRole();
      $data = DB::table('user_orders')
      ->join('logistics', 'user_orders.logistic_id', '=', 'logistics.id')
      ->select('user_orders.*', 'logistics.*')
      ->where('status','0')->orWhere('status','1')->orWhere('status','2')->orWhere('status','3')
      ->paginate(10);
      return view('admin/shipping-list',compact('data','role'));
   }
   public function processingList(){
      $data = DB::table('user_orders')
      ->join('logistics', 'user_orders.logistic_id', '=', 'logistics.id')
      ->select('user_orders.*', 'logistics.*')
      ->whereNull('status')->orWhere('status','0')
      ->paginate(10);
      $myService = app('myService');
      $role = $myService->getRole();
      return view('admin/processing-list',compact('data','role'));
   }
   public function processingListUpdateStatus(Request $request){
      $update = UserOrder::where([['user_id',$request->user_id],['logistic_id',$request->logistic_id]])->update(['status'=>$request->status]);
      if($update){
         return redirect()->back()->with('success','update order success');
      }else{
         return redirect()->back()->with('unsuccess','update order failed');
      }
   }
   public function orderDetail($id){
      $myService = app('myService');
      $role = $myService->getRole();
      $orderUser = UserOrder::where('logistic_id',$id)->first();
      $logistic = Logistic::find($id);
      return view('admin/order-detail',compact('logistic','role','orderUser')); 
   }
   public function shippingListPost(Request $request){
      if($request){
         $update = UserOrder::where([['user_id',$request->user_id],['logistic_id',$request->logistic_id]])->update(['status'=>$request->status]);
         if($update){
            return redirect()->back()->with('success','update order success');
         }else{
            return redirect()->back()->with('unsuccess','update order failed');
         }
      }
   }
}
