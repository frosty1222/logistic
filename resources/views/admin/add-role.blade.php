@extends('layouts.admin')
@section('admin')
<div class="container-fluid">
<div class="add-new-role">
    <div class="col-md-6">
        <legend class="text-center">Created New Role here !</legend>
        @if(session('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>success!</strong>  {{ session('success') }}
        </div>
        @endif
        @if(session('unsuccess'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>unsuccess!</strong>  {{ session('unsuccess') }}
        </div>
        @endif
         <form action="{{route('admin/add-role-post')}}" method="post">
             @csrf
             <div class="form-group">
                <label for="">Role name</label>
                
                <input type="text" name="name" class="form-control">
                
             </div>
             <button type="submit" class="btn btn-success">Save</button>
             <a href="/admin/shipping-view" class="btn btn-success">Cancel</a>
         </form>
    </div>
</div>
</div>
@endsection