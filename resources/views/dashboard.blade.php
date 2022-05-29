@extends('layouts.master')

@section('style')
	<!-- Table Style -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="main-wrapper">
	@include('layouts.header')
	@include('layouts.sidebar')
	<!-- Main Content -->
	<div class="main-content">
		<section class="section">

			<!-- Section Header -->
			<div class="section-header">
				<h1>Dashboard</h1>
			</div>

			<div class="section-body">
				<!-- Header Card Counter -->
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<div class="card card-statistic-1">
							<div class="card-icon bg-primary">
								<i class="far fa-user"></i>
							</div>
							<div class="card-wrap">
								<div class="card-header">
									<h4>Total Member</h4>
								</div>
								<div class="card-body">
									{{isset($member_count) ? $member_count : '0'}}
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="card card-statistic-1">
							<div class="card-icon bg-danger">
								<i class="far fa-newspaper"></i>
							</div>
							<div class="card-wrap">
								<div class="card-header">
									<h4>Total Book</h4>
								</div>
								<div class="card-body">
									{{isset($book_count) ? $book_count : '0'}}
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="card card-statistic-1">
							<div class="card-icon bg-success">
								<i class="fas fa-circle"></i>
							</div>
							<div class="card-wrap">
								<div class="card-header">
									<h4>Total Admin</h4>
								</div>
								<div class="card-body">
									{{isset($admin_count) ? $admin_count : '0'}}
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Main Content Table -->

				<h2 class="section-title">Borrow History</h2>

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mb-0" id="borrow">
										<thead>
											<tr>
												<th>#</th>
												<th>Member's Name</th>
												<th>Book's Title</th>
												<th>Borrowed At</th>
												<th>Deadline</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											@forelse ($borrows as $item)
												<tr>
													<td>{{$loop->iteration}}</td>
													<td>{{$item->member->name}}</td>
													<td>{{$item->book->title}}</td>
													<td>{{$item->created_at->diffForHumans()}}</td>
													<td>{{$item->deadline->diffForHumans()}}</td>
													<td><span class="badge badge-{{$item->status_id == 2 ? 'success' : 'danger'}}">{{$item->status->name}}</span></td>
												</tr>
											@empty
												<tr>
													<td colspan="6" class="text-center"><strong>DATA WAS NOT FOUND IN DATABASE</strong></td>
												</tr>
											@endforelse
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection

@section('script')
<!-- Search Ajax JS File -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
		$('#borrow').DataTable();
	})
</script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/index.js') }}"></script>
@endsection