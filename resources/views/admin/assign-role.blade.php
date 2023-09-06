@extends('layouts.admin')
@section('admin')
<div class="container-fluid">
<div class="add-new-role">
    <div class="col-md-6">
        <legend class="text-center">Created New Shipping order here !</legend>
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
         <form action="{{route('admin/assign-role-post')}}" method="post">
             @csrf
             <div class="form-group">
                <label for="">Choose Roles</label>
                
                <select name="role_id" id="input" class="form-control" required="required">
                    @foreach($roles as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
                
             </div>
             <div class="form-group">
                <label for="">Choose Users</label>
                
                <select name="user_id" id="input" class="form-control" required="required">
                    @foreach($user as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
                
             </div>
             <button type="submit" class="btn btn-success">Save</button>
             <a href="/admin/shipping-view" class="btn btn-success">Cancel</a>
         </form>
    </div>
</div>
</div>

@endsection