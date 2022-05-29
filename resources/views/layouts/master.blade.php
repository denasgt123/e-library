<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	@yield('title')
  	{{-- <title>E-Library Dashboard &mdash; Stisla</title> --}}
	@include('layouts.style')
	<!-- Specific Page Style -->
	@yield('style')
</head>
<body>
	<div id="app">
		@yield('content')
	</div>
	@yield('footer')
</body>
@include('layouts.script')
<!-- Specific Page Script -->
@yield('script')
</html>