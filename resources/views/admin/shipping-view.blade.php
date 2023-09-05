@extends('layouts.admin')
@section('admin')
<?php
$shippingStatus = [
    'Processing','Shipped','In Transit','Delivered'
]
?>
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
                    <a href="/admin/order-detail/{{$row->id}}" class="btn btn-primary">View detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101215581501721");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v17.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>