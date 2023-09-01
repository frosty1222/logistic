@extends('layouts.admin')
@section('admin')
<div class="responsive">
    <legend class="text-center">Shipping View</legend>
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
                    @if(!$row->status)
                    <span class="badge badge-primary">on processing</span>
                    @else
                    <span class="badge badge-success">{{$row->status}}</span>
                    @endif
                </td>
                <td>
                    <a href="" class="btn btn-primary">Confirm order</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection