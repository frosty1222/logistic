@extends('layouts.app')
@section('content')
<style>
    .image-container{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        height:100vh;
        background-image: url('https://cdn.saigonnewport.com.vn/uploads/images/2022/01/04/logistics-management-61d3f8ca9835c.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
    <div class="image-container">
        <div class="welcom-content">
             <div class="top-bar">
                  <div class="bar-list">
                       <div class="left-list">
                            <div class="child-list"><a href="{{route('shipping-view')}}">Shipping list view</a></div>
                       </div>
                       <div class="right-list">
                        @if(!Auth::check())
                             <div class="child-list"><a href="/login">Login</a></div>
                             <div class="child-list"><a href="/register">Register</a></div>
                        @endif
                       </div>
                  </div>
             </div>
        </div>
    </div>
@endsection