<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logistic;
use App\Models\UserHasRole;
use App\Models\UserOrder;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class LogisticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(Request $request)
    {
        $query = DB::table('user_orders')
            ->join('logistics', 'user_orders.logistic_id', '=', 'logistics.id')
            ->select('logistics.*', 'user_orders.logistic_id', 'user_orders.status');
    
        if ($request->order_number) {
            $query->where('logistics.order_number', $request->order_number);
        }
        if ($request->customer_name) {
            $query->where('logistics.customer_name', $request->customer_name);
        }
        if ($request->shipping_date) {
            $query->where('logistics.shipping_date', $request->shipping_date);
        }
    
        $data = $query->paginate(10);
    
        return view('shipping/shipping-home', compact('data'));
    }
    public function addNewForm(){
        $timestamp = time(); // Current timestamp
        $randomNumber = rand(1000, 9999); // Random 4-digit number
        $orderNumber = $timestamp . $randomNumber;
        return view('shipping/new-shipping-order',compact('orderNumber'));
    }
    public function storeNewForm(Request $request){
        $message = "";
        if($request){
          $created = Logistic::create($request->all());
           if($created){
             UserOrder::create([
                'user_id'=>auth()->user()->id,
                'logistic_id'=>$created->id
            ]);
            $message = "Shipping order create successfully";
          }else{
            $message = "Shipping order create falied !";
          }
          return redirect()->back()->with('success',$message);
        }
    }
    public function orderDetail($id){
        $orderUser = UserOrder::where('logistic_id',$id)->first();
        $logistic = Logistic::find($id);
        return view('shipping/order-detail',compact('orderUser','logistic'));
    }
    public function editForm(Request $request,$id){
        $data = [];
       if($id){
          $data = Logistic::find($id);
       }
       return view('shipping/edit-order',compact('data'));
    }
    public function postEdit(Request $request){
        $id = $request->id;
        $logistic = Logistic::find($id);
        if ($logistic) {
            $logistic->update($request->all());
            return redirect()->back()->with('success','You have update it successfully');
        } else {
            return redirect()->back()->with('unsuccess','something went wrong');
        }
    }
    public function deleteOrder($id){
        $logistic = Logistic::find($id);
        if (!$logistic) {
            return redirect()->back()->with('unsuccess', 'Order not found');
        }
        $CreatedOrder = UserOrder::where([['logistic_id', $id], ['user_id',auth()->user()->id]])->first();
    
        if (!$CreatedOrder) {
            return redirect()->back()->with('unsuccess', 'User role not found');
        }
    
        if ($logistic->delete() && $CreatedOrder->delete()) {
            return redirect()->back()->with('success', 'You have deleted the shipping order');
        } else {
            return redirect()->back()->with('unsuccess', 'Something went wrong');
        }
    }
}
