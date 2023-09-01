@extends('layouts.app')
@section('content')
<div class="login">
    <div class="col-md-6">
        <legend>Login Here !</legend>
        <form action="{{route('login-form')}}" method="post" role="form">
        @csrf
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Email...">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password...">
            </div>
            <div class="form-group">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember" checked>
                    Remember me!
                  </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
                <a class="link link-info" href="/register" role="link">don't have an account yet !</a>
            </div>
        </form>
    </div>
</div>
@endsection