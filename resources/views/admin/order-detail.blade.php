@extends('layouts.admin')
@section('admin')
<?php
$shippingStatus = [
    'Processed','Shipped','In Transit','Delivered'
]
?>
<style>
.new-shipping-order{
    width: 100%;
    display: flex;
    justify-content: center;
}
.modal-custom {
    min-width: 200px;
    min-height: 200px;
    box-shadow: 0.1px 0.1px 1px 1px #000;
    padding: 5px 5px;
}
.modal-custom ul{
    text-align: left;
}
.modal-custom ul li{
    margin-bottom: 20px;
    list-style:none;
}
.modal-custom ul li span{
    padding-left: 10px;
}
</style>
<div class="new-shipping-order">
    <div class="col-md-8">
        <div class="container">
         <legend class="text-center">Order Detail</legend>
         <hr>
         <a href="/user-review/{{$logistic->id}}" class="btn btn-primary" id="review">Review</a>
          <div class="modal-custom">
               <ul>
                  <li>Order number:<span>{{$logistic->order_number}}</span></li>
                  <li>Customer name:<span>{{$logistic->customer_name}}</span></li>
                  <li>Recipient Address:<span>{{$logistic->recipient_address}}</span></li>
                  <li>Shipping address:<span>{{$logistic->shipping_address}}</span></li>
                  <li>Shipping date:<span>{{$logistic->shipping_date}}</span></li>
                  <li>Expected delivery date:<span>{{$logistic->expected_delivery_date}}</span></li>
                    <li>Order status:
                     @if($orderUser->status == null)
                     <span class="badge badge-warning">Processing</span>
                     @elseif($orderUser->status == '0')
                     <span class="badge badge-success"><?= $shippingStatus[0] ?></span>
                     @elseif($orderUser->status == '1')
                     <span class="badge badge-success"><?= $shippingStatus[1] ?></span>
                     @elseif($orderUser->status == '2')
                     <span class="badge badge-primary"><?= $shippingStatus[2] ?></span>
                     @else
                     <span class="badge badge-secondary"><?= $shippingStatus[3] ?></span>
                     @endif
                    </li>
               </ul>
          </div>
        </div>
    </div>
</div>
@endsection