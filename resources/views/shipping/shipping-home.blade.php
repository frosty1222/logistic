@extends('layouts.home')
@section('shipping')
<div class="shipping-container">
    <div class="top-bar">
        <div class="bar-list">
            <div class="left-list">
                <div class="child-list"><a href="">Shipping list view</a></div>
            </div>
            <div class="welcome">
                <h1 class="text-white">Welcome to list center</h1>
            </div>
            <div class="right-list">
                <div class="child-list"><a href="/add-new-shipping-order">Create new order</a></div>
                <div class="child-list"><a href="/logout">logout</a></div>
            </div>
        </div>
    </div>
    <div class="advanced-search">
        <legend class="text-center">Advanced Search</legend>
        <form action="" id="form">
            <div class="form-group">
                <label for="">Order number</label>
                <input type="text" class="form-control" name="order_number" placeholder="Order number...">
            </div>
            <div class="form-group">
                <label for="">Customer name</label>
                <input type="text" class="form-control" name="customer_name" placeholder="Customer name...">
            </div>
            <div class="form-group">
                <label for="">Shipping date</label>
                <input type="date" class="form-control" name="shipping_date">
            </div>
            <div class="form-group search-button">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>
    <div class="reponsive custom-table">
    <table class="table table-bordered">
        <thead class="thead-inverse">
            <tr>
                <th>No.</th>
                <th>Order numbers</th>
                <th>Customer name</th>
                <th>Shipping Date</th>
                <th>Expected Delivery Date</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $n=1; ?>
                @foreach($data as $row)
                <tr>
                    <td><?= $n++?></td>
                    <td scope="row">{{$row->order_number}}</td>
                    <td>{{$row->customer_name}}</td>
                    <td>{{$row->shipping_date}}</td>
                    <td>{{$row->expected_delivery_date}}</td>
                    <td class="text-center">
                          <a href="/order-detailed/{{$row->id}}" class="btn btn-primary">Show detail</a>
                          @if(!$row->status || $row->status == 'Processing')
                          <a href="/editOrder/{{$row->id}}" class="btn btn-warning">Edit order</a>
                          @endif
                          <a href="/delete-order/{{$row->id}}" class="btn btn-danger">Delete Order</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
    </table>
    {{ $data->links() }}
    </div>
</div>
@endSection
<script>
    let count =1;
    // function openAvancedSearch(){
    //     count ++;
    //     addEventListener('click',function(){
    //          var form = document.getElementById('form');
    //          form.style.visibility = "visible";
    //          if(count % 2 === 0){
    //             form.style.visibility = 'visible';
    //          }else{
    //             form.style.visibility = 'hidden';
    //          }
    //     })
    // }
</script>