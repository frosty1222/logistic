@extends('layouts.home')
@section('shipping')
<div class="container-fluid">
    <div class="custom-review-page">
         <div class="col-md-8">
            <form action="">
                <div class="form-group">
                     <label for="">Order number</label>
                     <input type="text" class="form-control" value="{{$data->order_number}}" readonly>
                </div>
            </form>
         </div>
    </div>
</div>
@endsection