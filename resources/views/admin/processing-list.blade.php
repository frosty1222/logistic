@extends('layouts.admin')
@section('admin')
<?php
$shippingStatus = [
    'Processing','Shipped','In Transit','Delivered'
]
?>
<div class="responsive">
    <legend class="text-center">Shipping View</legend>
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    @if(session('unsuccess'))
    <div class="alert alert-warning">
        {{session('unsuccess')}}
    </div>
    @endif
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Order number</th>
                <th>Customer name</th>
                <th>Shipping date</th>
                <th>Expected delivery date</th>
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
                <td>
                     @if(!$row->status || $row->status == '0')
                     <span class="badge badge-warning"><?= $shippingStatus[0] ?></span>
                     @elseif($row->status == 1)
                     <span class="badge badge-success"><?= $shippingStatus[1] ?></span>
                     @elseif($row->status == 2)
                     <span class="badge badge-primary"><?= $shippingStatus[2] ?></span>
                     @else
                     <span class="badge badge-secondary"><?= $shippingStatus[3] ?></span>
                     @endif
                </td>
                <td>
                    <form action="{{route('staff/processing-list/update')}}" method="post">
                        @csrf
                        <input type="text" name="user_id" value="{{$row->user_id}}" hidden>
                        <input type="text" name="logistic_id" value="{{$row->logistic_id}}" hidden>
                        <div class="d-flex">
                            <select name="status" id="input" class="form-control" required="required">
                                <option value="0">Processing</option>
                            </select>
                            <button type="submit" class="btn btn-success" disabled="$row->status == '0' ? true :false">update</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
</div>
@endsection
