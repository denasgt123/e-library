@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('content')
<nav class="fixed-top bg-white">
	<div class="float-left mt-4 ml-4">
		<a href="{{route('home')}}" class="my-auto"><i class="fas fa-home" style="font-size: 20px;"></i> Back To Home Page</a>
	</div>
	<div class="px-auto py-3 d-flex justify-content-center align-items-center">
		<form class="w-25" action="{{route('search')}}" method="GET">
			<div class="input-group col-12">
				<input type="text" class="form-control" placeholder="Search" name="keyword">
				<div class="input-group-append">
					<button class="btn btn-primary"><i class="fas fa-search"></i></button>
				</div>
			</div>
		</form>
	</div>
</nav>

<div class="container">
	<h1 class="display-4 text-dark text-center my-5 pt-5">"{{isset($keyword) ? $keyword : ''}}" Search Result</h1>
	<div class="row">
		@forelse ($books as $item)
			<div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-center">
				<div class="card" style="background-image: url({{ $item->photo == 'myBook.jpg' ? asset('img/myBook.jpg') : asset('storage/cover/' . $item->photo)}}); background-size: cover; background-position: center; background-repeat: no-repeat; width: 240px; height: 360px;">
					<div class="content">
						<p class="copy mb-1"><b>Title</b></p>
						<p class="copy">{{$item->title}}</p>
						<p class="copy mb-1"><b>Creator</b></p>
						<p class="copy">{{$item->creator}}</p>
						<p class="copy mb-1"><b>Publisher</b></p>
						<p class="copy">{{$item->publisher}}</p>
						<p class="copy mb-1"><b>Publish Date</b></p>
						<p class="copy">{{$item->publish_date}}</p>
						<p class="copy mb-1"><b>Lokasi</b></p>
						<p class="copy">{{$item->location}}</p>
					</div>
				</div>
			</div>
		@empty
		<h1 class="text-center my-5 text-dark h1"><b>No Book Found on Database</b></h1>
		@endforelse
	</div>
</div>
@endsection

@section('footer')
<footer class="text-center py-4 border-top fixed-bottom">
	Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="">Denassyah Nurrohman</a> All Rights Reserved
</footer>
@endsection