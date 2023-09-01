@extends('layouts.home')
@section('shipping')
<div class="new-shipping-order">
    <div class="col-md-6">
        <legend class="text-center">Created New Shipping order here !</legend>
        @if(session('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>success!</strong>  {{ session('success') }}
        </div>
        @endif
         <form action="{{route('add-new-shipping')}}" method="post">
             @csrf
             <div class="form-group">
                <label for="">Order number</label>
                <input type="text" class="form-control" name="order_number" value="{{$orderNumber}}" readonly placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Customer name</label>
                <input type="text" class="form-control" name="customer_name" placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Recipient address</label>
                <input type="text" class="form-control" name="recipient_address" placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Shipping address</label>
                <input type="text" class="form-control" name="shipping_address" placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Shipping date</label>
                <input type="date" class="form-control" name="shipping_date" placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Expected delivery date</label>
                <input type="date" class="form-control" name="expected_delivery_date" placeholder="Enter info...">
             </div>
             <button type="submit" class="btn btn-success">Save</button>
             <a href="/shipping-view" class="btn btn-success">Cancel</a>
         </form>
    </div>
</div>
@endsection