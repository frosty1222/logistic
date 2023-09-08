@extends('layouts.admin')
@section('admin')
<?php
$shippingStatus = [
    'Processed','Shipped','In Transit','Delivered'
]
?>
<div class="responsive">
    <legend class="text-center">Shipping View</legend>
    <hr>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Order number</th>
                <th>Customer name</th>
                <th>Shipping date</th>
                <th>Expected delivery date</th>
                <th>Recipient Address</th>
                <th>Shipping address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $n = 1?>
            @foreach($data as $row)
            <tr>
                <td><?= $n++ ?></td>
                <td>{{$row->order_number}}</td>
                <td>{{$row->customer_name}}</td>
                <td>{{$row->shipping_date}}</td>
                <td>{{$row->expected_delivery_date}}</td>
                <td>{{$row->recipient_address}}</td>
                <td>{{$row->shipping_address}}</td>
                <td>
                     @if($row->status == null)
                     <span class="badge badge-warning">Processing</span>
                     @elseif($row->status == '0')
                       <span class="badge badge-success"><?= $shippingStatus[0] ?></span>
                     @elseif($row->status == 1)
                     <span class="badge badge-success"><?= $shippingStatus[1] ?></span>
                     @elseif($row->status == 2)
                     <span class="badge badge-primary"><?= $shippingStatus[2] ?></span>
                     @else
                     <span class="badge badge-secondary"><?= $shippingStatus[3] ?></span>
                     @endif
                </td>
                <td>
                    <a href="/general/order-detail/{{$row->id}}" class="btn btn-primary">detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
