@extends('layouts.master')

@section('content')
@include('layouts.header')
@include('layouts.sidebar')

<div class="main-content">
	<section class="section">
		<!-- Section Header -->
		<div class="section-header">
			<h1>Book</h1>
		</div>

		<h2 class="section-title">{{Route::is('book.create') ? "Create a New" : "Update a"}} Book</h2>

		<div class="section-body">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-12 col-sm-12 d-flex align-items-center">
					<img src="{{Route::is('book.create') ? asset('img/myBook.jpg') : ($book->photo == 'myBook.jpg' ? asset('img/myBook.jpg') : asset('storage/cover/'.$book->photo))}}" alt="Cover preview..." id="preview" class="w-100">
				</div>
				<div class="col-lg-9 col-md-12 col-12 col-sm-12">
				{{-- </div>
				<div class="col-12"> --}}
				  	<div class="card">
						<div class="card-header">
							<h4>{{Route::is('book.create') ? "Add Detail's" : "Update Detail's"}} Book</h4>
						</div>
						<div class="card-body">
							<form action="{{Route::is('book.create') ? route('book.store') : route('book.update', $book->id)}}" method="POST" enctype="multipart/form-data">
								@csrf
								@if (Route::is('book.edit'))
									@method('PUT')
								@endif
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="title" value="{{isset($book) ? $book->title : ''}}" class="form-control @error('title') is-invalid @enderror">
										@error('title')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Creator</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="creator" value="{{isset($book) ? $book->creator : ''}}" class="form-control @error('creator') is-invalid @enderror">
										@error('creator')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="publisher" value="{{isset($book) ? $book->publisher : ''}}" class="form-control @error('publisher') is-invalid @enderror">
										@error('publisher')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publish Date</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="publish_date" value="{{isset($book) ? $book->publish_date : ''}}" class="form-control @error('publish_date') is-invalid @enderror">
										@error('publish_date')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Location</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="location" value="{{isset($book) ? $book->location : ''}}" class="form-control @error('pages') is-invalid @enderror">
										@error('location')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Book's Cover</label>
									<div class="col-sm-12 col-md-7">
										<input type="file" name="cover" class="form-control" onchange="previewFile()">
										@error('cover')
											<span class="invalid-feedback d-block" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
									<div class="col-sm-12 col-md-7">
										<button class="btn btn-primary">{{Route::is('book.create') ? 'Add' : 'Update'}} Book</button>
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

@section('script')
<script>
function previewFile() {
	// var preview = document.querySelector('img');
	var preview = document.getElementById('preview');
	var file    = document.querySelector('input[type=file]').files[0];
	var reader  = new FileReader();

	reader.onloadend = function () {
		preview.src = reader.result;
	}

	if (file) {
		reader.readAsDataURL(file);
	} else {
		preview.src = "";
	}
}
</script>
@endsection