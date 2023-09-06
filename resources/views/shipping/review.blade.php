@extends('layouts.home')
@section('shipping')
<div class="container-fluid">
    <div class="custom-review-page">
         <div class="col-md-6">
          @if(session('unsuccess'))
          <div class="alert alert-danger">
                {{session('unsuccess')}}
          </div>
          @endif
          @if(session('success'))
          <div class="alert alert-success">
                {{session('success')}}
          </div>
          @endif
          <h6>You should submit this form after you have already receive your package</h3>
            <form action="{{route('user-review-post')}}" method="post">
               @csrf
                <div class="form-group">
                     <label for="">Order number</label>
                     <input type="text" class="form-control" value="{{$data->order_number}}" name="order_number" readonly>
                </div>
                <div class="form-group">
                     <label for="">Review content</label>
                     <textarea type="text" class="form-control" name="content"></textarea>
                </div>
                <div class="form-group">
                     <label for="">Star</label>
                    <div class="star-rating">
                    <input type="radio" id="star1" name="rating" value="5"><label for="star1"></label>
                    <input type="radio" id="star2" name="rating" value="4"><label for="star2"></label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
                    <input type="radio" id="star4" name="rating" value="2"><label for="star4"></label>
                    <input type="radio" id="star5" name="rating" value="1"><label for="star5"></label>
                    <input type="hidden" id="selected-rating" name="star_number">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">send it</button>
            </form>

         </div>
    </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Listen for changes in the radio buttons
    $('input[type="radio"]').change(function() {
      // Get the value of the selected radio button
      var selectedRating = $(this).val();
      // Update the hidden input field with the selected rating
      $('#selected-rating').val(selectedRating);
    });
  });
</script>