@extends('layouts.master')

@section('content')
@include('layouts.header')
@include('layouts.sidebar')

<div class="main-content">
	<section class="section">
		<!-- Section Header -->
		<div class="section-header">
			<h1>Borrowing</h1>
		</div>

		<h2 class="section-title">Create a New Borrowing Data</h2>

		<div class="section-body">
			<div class="row">
				<div class="col-12">
				  	<div class="card">
						<div class="card-header">
							<h4>Add New Borrowing Data</h4>
						</div>
						<div class="card-body">
							<form action="{{Route::is('borrow.create') ? route('borrow.store') : route('borrow.update', $borrow->id)}}" method="POST">
								@csrf
								@if (Route::is('borrow.edit'))
									@method('PUT')
								@endif
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Member</label>
									<div class="col-sm-12 col-md-7">
										<select class="form-control selectric" name="anggota_id">
											@forelse ($users as $item)
												<option value="{{$item->id}}" {{Route::is('borrow.create') ? '' : ($borrow->anggota_id == $item->id ? 'selected' : '')}}>{{$item->name}}</option>
											@empty
												<option value="">No Member Available</option>
											@endforelse
										</select>
										@error('anggota_id')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Book</label>
									<div class="col-sm-12 col-md-7">
										<select class="form-control selectric" name="book_id">
											@forelse ($books as $item)
												<option value="{{$item->id}}" {{Route::is('borrow.create') ? '' : ($borrow->book_id == $item->id ? 'selected' : '')}}>{{$item->title}}</option>
											@empty
												<option value="">No Book Available</option>
											@endforelse
										</select>
										@error('book_id')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
									<div class="col-sm-12 col-md-7">
										<button class="btn btn-primary">Submit</button>
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