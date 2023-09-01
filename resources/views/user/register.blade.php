@extends('layouts.app')
@section('content')
<div class="register">
    <div class="col-md-6">
        <legend>Register Here !</legend>
        <form action="{{route('register')}}" method="post" role="form">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Name..." required="true">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Email..." required="true">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password..." required="true">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
                <a class="link link-info" href="/login" role="link">Already have an account</a>
            </div>
        </form>
    </div>
</div>
@endsection