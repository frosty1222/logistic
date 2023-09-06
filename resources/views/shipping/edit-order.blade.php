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
        @if(session('unsuccess'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>success!</strong>  {{ session('unsuccess') }}
        </div>
        @endif
         <form action="{{route('edit-shipping-order-post')}}" method="post">
             @csrf
             <input type="number" value="{{$data->id}}" name="id" hidden>
             <div class="form-group">
                <label for="">Order number</label>
                <input type="text" class="form-control" name="order_number" value="{{$data->order_number}}" readonly placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Customer name</label>
                <input type="text" class="form-control" name="customer_name" value="{{$data->customer_name}}" placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Recipient address</label>
                <input type="text" class="form-control" name="recipient_address" value="{{$data->recipient_address}}" placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Shipping address</label>
                <input type="text" class="form-control" name="shipping_address" value="{{$data->shipping_address}}" placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Shipping date</label>
                <input type="date" class="form-control" name="shipping_date" value="{{$data->shipping_date}}" placeholder="Enter info...">
             </div>
             <div class="form-group">
                <label for="">Expected delivery date</label>
                <input type="date" class="form-control" name="expected_delivery_date" value="{{$data->expected_delivery_date}}" placeholder="Enter info...">
             </div>
             <button type="submit" class="btn btn-success">Save</button>
             <a href="/shipping-view" class="btn btn-success">Cancel</a>
         </form>
    </div>
</div>
@endsection