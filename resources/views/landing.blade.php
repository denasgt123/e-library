@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('content')
<section id="home" class="vh-100 position-relative" style="background-image: url('{{ asset('img/landing-page.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
	<div style="background-color: black; opacity: .8;" class="vh-100"></div>
	<div class="position-absolute container" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
		<h1 class="display-1 text-white text-center">WELCOME TO</h1>
		<h1 class="display-1 text-white text-center">E-LIBRARY</h1>
		<h5 class="text-center text-secondary mt-3 pt-4 pb-4 mb-5">"If your culture doesn't like nerds, you're in serious trouble" - <i>Bill Gates</i></h5>
		<form action="{{route('search')}}" method="GET">
			<div class="d-flex justify-content-center">
				<div class="input-group mb-3 w-75">
					<input type="text" class="form-control" placeholder="Search a Book Now" aria-label="Search a Book" aria-describedby="button-addon2" name="keyword">
					<div class="input-group-append">
						<button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

<section id="book" class="container-fluid">
	<h1 class="text-center my-5 text-dark h1"><b>All Book</b></h1>
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
		{{-- <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-center">
			<main class="page-content">
				<div class="card" style="background-image: url(https://images.unsplash.com/photo-1517021897933-0e0319cfbc28?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ); background-size: cover; background-position: center; background-repeat: no-repeat; width: 240px; height: 360px;">
					<div class="content">
						<p class="copy mb-1"><b>Title</b></p>
						<p class="copy">My Book</p>
						<p class="copy mb-1"><b>Creator</b></p>
						<p class="copy">Denassyah Nurrohman</p>
						<p class="copy mb-1"><b>Publisher</b></p>
						<p class="copy">Denas Factory</p>
						<p class="copy mb-1"><b>Publish Date</b></p>
						<p class="copy">2021</p>
						<p class="copy mb-1"><b>Lokasi</b></p>
						<p class="copy">Bagian Hewan, Rak 2, Baris 2</p>
						<p class="text-white">Check out all of these gorgeous mountain trips</p>
						<p class="text-white">Lokasi</p>
						<p class="text-white">Bagian Hewan, Rak 2, Baris 2</p>
					</div>
				</div>
			</main>
			<div class="card" style="background-image: url(https://images.unsplash.com/photo-1517021897933-0e0319cfbc28?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ); background-size: cover; background-position: center; background-repeat: no-repeat;">
				<div class="content">
				  <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
				</div>
			  </div>
		</div> --}}
		{{-- <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-center">
			<div class="card" style="background-image: url(https://images.unsplash.com/photo-1517021897933-0e0319cfbc28?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ); background-size: cover; background-position: center; background-repeat: no-repeat; width: 240px; height: 360px;">
				<div class="content">
					<p class="copy mb-1"><b>Title</b></p>
					<p class="copy">My Book</p>
					<p class="copy mb-1"><b>Creator</b></p>
					<p class="copy">Denassyah Nurrohman</p>
					<p class="copy mb-1"><b>Publisher</b></p>
					<p class="copy">Denas Factory</p>
					<p class="copy mb-1"><b>Publish Date</b></p>
					<p class="copy">2021</p>
					<p class="copy mb-1"><b>Lokasi</b></p>
					<p class="copy">Bagian Hewan, Rak 2, Baris 2</p>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-center">
			<div class="card" style="background-image: url(https://images.unsplash.com/photo-1517021897933-0e0319cfbc28?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ); background-size: cover; background-position: center; background-repeat: no-repeat; width: 240px; height: 360px;">
				<div class="content">
					<p class="copy mb-1"><b>Title</b></p>
					<p class="copy">My Book</p>
					<p class="copy mb-1"><b>Creator</b></p>
					<p class="copy">Denassyah Nurrohman</p>
					<p class="copy mb-1"><b>Publisher</b></p>
					<p class="copy">Denas Factory</p>
					<p class="copy mb-1"><b>Publish Date</b></p>
					<p class="copy">2021</p>
					<p class="copy mb-1"><b>Lokasi</b></p>
					<p class="copy">Bagian Hewan, Rak 2, Baris 2</p>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-center">
			<div class="card" style="background-image: url(https://images.unsplash.com/photo-1517021897933-0e0319cfbc28?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ); background-size: cover; background-position: center; background-repeat: no-repeat; width: 240px; height: 360px;">
				<div class="content">
					<p class="copy mb-1"><b>Title</b></p>
					<p class="copy">My Book</p>
					<p class="copy mb-1"><b>Creator</b></p>
					<p class="copy">Denassyah Nurrohman</p>
					<p class="copy mb-1"><b>Publisher</b></p>
					<p class="copy">Denas Factory</p>
					<p class="copy mb-1"><b>Publish Date</b></p>
					<p class="copy">2021</p>
					<p class="copy mb-1"><b>Lokasi</b></p>
					<p class="copy">Bagian Hewan, Rak 2, Baris 2</p>
				</div>
			</div>
		</div> --}}
	</div>
</section>
@endsection

@section('footer')
<footer class="text-center py-4 border-top">
	Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="">Denassyah Nurrohman</a> All Rights Reserved
</footer>
@endsection