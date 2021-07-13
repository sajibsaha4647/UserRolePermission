@extends('layouts.admin')
@section('content')

			<div class="min-height-200px">

				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Add User</h4>
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
					<form action="{{url('/admina/CreateUser')}}" method="post" enctype="multipart/form-data">
						@csrf
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="userName" placeholder="Name">
                                @error('userName')
                                    <span style="color:red">{{ $message }}</span>
                                @enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="" name="userEmail" type="email">
                                @error('userEmail')
                                    <span style="color:red">{{ $message }}</span>
                                @enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="" name="userPassword" type="password">
                                @error('userPassword')
                                    <span style="color:red">{{ $message }}</span>
                                @enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">role list</label>
							<div class="col-sm-12 col-md-10">
								<select name="UserRole" class="custom-select col-12">
									<option value="">Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
                                @error('UserRole')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">image</label>
							<div class="col-sm-12 col-md-10">
								<div class="custom-file">
                                    <input name="pic" type="file" class="custom-file-input">
                                    @error('pic')
                                    <span style="color:red">{{ $message }}</span>
                                @enderror
                                    <label class="custom-file-label">Choose image</label>
                                </div>
							</div>
						</div>
                        <button  type="submit" class="btn btn-primary">Save</button>
					</form>

				</div>
				<!-- Default Basic Forms End -->






@endsection
