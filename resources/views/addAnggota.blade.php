{{-- @php
	dd($errors);
@endphp --}}

@extends('layouts.master')

@section('content')
@include('layouts.header')
@include('layouts.sidebar')

<div class="main-content">
	<section class="section">
		<!-- Section Header -->
		<div class="section-header">
			<h1>Member</h1>
		</div>

		<h2 class="section-title">{{Route::is('member.create') ? "Create" : "Update"}} a Member</h2>

		<div class="section-body">
			<div class="row">
				<div class="col-12">
				  	<div class="card">
						<div class="card-header">
							<h4>{{Route::is('member.create') ? "Add New" : "Edit a"}} Member</h4>
						</div>
						<div class="card-body">
							<form action="{{Route::is('member.create') ? route('member.store') : route('member.update', $anggota->id)}}" method="POST">
								@csrf
								@if (Route::is('member.edit'))
									@method('PUT')
								@endif
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" value="{{isset($anggota) ? $anggota->nik : ''}}" name="nik" class="form-control @error('nik') is-invalid @enderror">
										@error('nik')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" value="{{isset($anggota) ? $anggota->name : ''}}" name="name" class="form-control @error('name') is-invalid @enderror">
										@error('name')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">DPoB</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" value="{{isset($anggota) ? $anggota->dpob : ''}}" name="dpob" class="form-control @error('dpob') is-invalid @enderror">
										@error('dpob')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">City</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" value="{{isset($anggota) ? $anggota->city : ''}}" name="city" class="form-control @error('city') is-invalid @enderror">
										@error('city')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gender</label>
									<div class="col-sm-12 col-md-7">
										<select class="form-control selectric @error('gender') is-invalid @enderror" name="gender">
											<option>Male</option>
											<option>Female</option>
										</select>
										@error('gender')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Blood Type</label>
									<div class="col-sm-12 col-md-7">
										<select class="form-control selectric @error('blood_type') is-invalid @enderror" name="blood_type">
											<option {{isset($anggota) ? ($anggota->blood_type == 'A' ? 'selected' : '') : ''}}>A</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'A+' ? 'selected' : '') : ''}}>A+</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'A-' ? 'selected' : '') : ''}}>A-</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'B' ? 'selected' : '') : ''}}>B</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'B+' ? 'selected' : '') : ''}}>B+</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'B-' ? 'selected' : '') : ''}}>B-</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'AB' ? 'selected' : '') : ''}}>AB</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'AB+' ? 'selected' : '') : ''}}>AB+</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'AB-' ? 'selected' : '') : ''}}>AB-</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'O' ? 'selected' : '') : ''}}>O</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'O+' ? 'selected' : '') : ''}}>O+</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'O-' ? 'selected' : '') : ''}}>O-</option>
											<option {{isset($anggota) ? ($anggota->blood_type == 'Others' ? 'selected' : '') : ''}}>Others</option>
										</select>
										@error('blood_type')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" value="{{isset($anggota) ? $anggota->address : ''}}" name="address" class="form-control @error('name') is-invalid @enderror">
										@error('address')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Religion</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" value="{{isset($anggota) ? $anggota->religion : ''}}" name="religion" class="form-control @error('name') is-invalid @enderror">
										@error('religion')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Married Status</label>
									<div class="col-sm-12 col-md-7">
										<select class="form-control selectric @error('is_married') is-invalid @enderror" name="is_married">
											<option value="1" {{isset($anggota) ? ($anggota->is_married ? 'selected' : '') : ''}}>Married</option>
											<option value="0" {{isset($anggota) ? ($anggota->is_married ? '' : 'selected') : ''}}>Not Married</option>
										</select>
										@error('is_married')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" value="{{isset($anggota) ? $anggota->job : ''}}" name="job" class="form-control @error('name') is-invalid @enderror">
										@error('job')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nationality</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" value="{{isset($anggota) ? $anggota->nationality : ''}}" name="nationality" class="form-control @error('name') is-invalid @enderror">
										@error('nationality')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
									<div class="col-sm-12 col-md-7">
										<button class="btn btn-primary">{{Route::is('book.create') ? 'Add' : 'Update'}} Member</button>
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