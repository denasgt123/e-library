@extends('layouts.master')

@section('content')
@include('layouts.header')
@include('layouts.sidebar')

<div class="main-content">
	<section class="section">
		<!-- Section Header -->
		<div class="section-header">
			<h1>Admin</h1>
		</div>

		<h2 class="section-title">{{Route::is('admin.create') ? "Create" : "Update"}} a Admin</h2>

		<div class="section-body">
			<div class="row">
				<div class="col-12">
				  	<div class="card">
						<div class="card-header">
							<h4>{{Route::is('admin.create') ? "Add New" : "Edit"}} Admin</h4>
						</div>
						<div class="card-body">
							<form action="{{Route::is('admin.create') ? route('admin.store') : route('admin.update', $user->id)}}" class="" method="POST">
								@csrf
								@if (Route::is('admin.edit'))
									@method('PUT')
								@endif
								
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="name" value="@isset($user){{$user ? $user->name : ''}}@endisset" class="form-control @error('name') is-invalid @enderror">
										@error('name')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
									<div class="col-sm-12 col-md-7">
										<input type="email" name="email" value="@isset($user){{$user ? $user->email : ''}}@endisset" class="form-control @error('email') is-invalid @enderror">
										@error('email')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
									<div class="col-sm-12 col-md-7">
										<input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
										@error('password')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Re-type Password</label>
									<div class="col-sm-12 col-md-7">
										<input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
										@error('password_confirmation')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
									<div class="col-sm-12 col-md-7">
										<button type="submit" class="btn btn-primary">{{Route::is('book.create') ? 'Add' : 'Update'}} Admin</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection