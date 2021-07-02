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
        <form>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Role name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" placeholder="role name">
                </div>
            </div>
            <button type="button" class="btn btn-success">Save</button>
        </form>

    </div>
    <!-- Default Basic Forms End -->

@endsection
