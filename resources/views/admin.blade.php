@extends('layouts.master')

@section('style')
	<!-- Table Style -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
@include('layouts.header')
@include('layouts.sidebar')

<div class="main-content">
	<section class="section">
		<!-- Section Header -->
		<div class="section-header">
			<h1>Admin</h1>
		</div>

		<h2 class="section-title">All Admin User</h2>
		<p class="section-lead">On this page you can manage admin users</p>

		<div class="section-body">
			<div class="row mt-4">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="float-left">
								<a href="{{route('admin.create')}}" class="ml-auto btn btn-primary">Add New</a>
							</div>

							<div class="clearfix mb-3"></div>

							<div class="table-responsive">
								<table class="table table-striped" id="admin">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Email</th>
											<th>Created At</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@forelse ($admins as $item)
											<tr>
												<td>{{$loop->iteration}}</td>
												<td>{{$item->name}}</td>
												<td>{{$item->email}}</td>
												<td>{{$item->created_at->diffForHumans()}}</td>
												<td>
													<a href="{{route('admin.edit', $item->id)}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
													<a href="{{route('admin.destroy', $item->id)}}" class="btn delete-btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
												</td>
											</tr>
										@empty
											<tr>
												<td colspan="5" class="text-center"><strong>DATA WAS NOT FOUND IN DATABASE</strong></td>
											</tr>
										@endforelse
									</tbody>
								</table>
							</div>
							{{-- <div class="float-right">
								<nav>
									<ul class="pagination">
										<li class="page-item disabled">
											<a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
												<span class="sr-only">Previous</span>
											</a>
										</li>
										<li class="page-item active">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
												<span class="sr-only">Next</span>
											</a>
										</li>
									</ul>
								</nav>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<form id="delete-form" method="POST" action="">
	@csrf
	@method('DELETE')
</form>
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
			$('#admin').DataTable();
		})
	</script>

	<!-- Alert JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9" async></script>
	<script>
		const btn_delete = $('.delete-btn'),
		form = $('#delete-form');
		btn_delete.on('click', function (e) {
			e.preventDefault();
			const link = $(this).attr('href');
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'No, cancel!',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {
					console.log(link);
					form.attr('action', link)
					form.submit();
					Swal.fire(
						'Deleted!',
						'This Admin has been deleted.',
						'success'
					)
				}
				// window.location.href = link;
			});
		}); 
	</script>
@endsection