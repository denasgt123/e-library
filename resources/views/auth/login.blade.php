@extends('layouts.master')

{{-- @section('style')
<style>
	* {
		margin: 0;
	}
</style>
@endsection --}}

@section('content')	
<section class="section ">
	<div class="container">
		<div class="row d-flex align-items-center vh-100">
			<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
				<div class="card card-primary">
					<div class="card-header text-center"><h1>Login</h1></div>

					<div class="card-body">
						<form method="POST" action="{{ route('login') }}" class="needs-validation">
							@csrf
							<div class="form-group">
								<label for="email">Email</label>
								<input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
								<div class="invalid-feedback">
									Please fill your Email
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="control-label">Password</label>
								<input id="password" type="password" class="form-control" name="password" tabindex="2" required>
								<div class="invalid-feedback">
									please fill your Password
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
								Login
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="simple-footer fixed-bottom">
		Copyright &copy; Denas 2021 All Right Reserved
	</div>
</section>
@endsection