@extends('layouts.home')
@section('shipping')
<div class="new-shipping-order">
    <div class="col-md-8">
        <div class="container">
         <legend class="text-center">Order Detail</legend>
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
                     @if(!$logistic->status)
                     <span class="badge badge-warning">on processing</span>
                     @else
                     <span class="badge badge-success">{{$logistic->status}}</span>
                     @endif
                  </li>
               </ul>
          </div>
        </div>
    </div>
</div>
@endsection