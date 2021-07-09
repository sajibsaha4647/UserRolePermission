@extends('layouts.admin')
@section('content')

<div class="min-height-200px">

    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Add role</h4>
            </div>
        </div>
            @if (session('danger'))
            <div class="alert alert-danger" role="alert">
                {{ session('danger') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        <form action="{{url('/admina/CreateRoleUser')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Role name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="admin_role_name" type="text" placeholder="role name">
                    @error('admin_role_name')
                        <span style="color:red">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>

    </div>
    <!-- Default Basic Forms End -->

@endsection
