<!-- Sidebar -->
<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="index.html">E-Library</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="index.html">EL</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="active">
				<a href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
			</li>
			<li class="menu-header">Controlling</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-clipboard-list"></i> <span>Borrow</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="{{route('borrow.index')}}">All Borrow History</a></li>
					<li><a class="nav-link" href="{{route('borrow.create')}}">Add New Borrowing</a></li>
				</ul>
			</li>
			<li class="menu-header">Adding Data</li>
			@auth
				@if (Auth::user()->role_id == 1)
				<li>
					<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-lock"></i> <span>Admin</span></a>
					<ul class="dropdown-menu">
						<li><a class="nav-link" href="{{route('admin.index')}}">All Admin Users</a></li>
						<li><a class="nav-link" href="{{route('admin.create')}}">Add New Admin</a></li>
					</ul>
				</li>
				@endif
			@endauth
			<li>
				<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Member</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="{{route('member.index')}}">All Members</a></li>
					<li><a class="nav-link" href="{{route('member.create')}}">Add New Member</a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i> <span>Book</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="{{route('book.index')}}">All Library's Book</a></li>
					<li><a class="nav-link" href="{{route('book.create')}}">Add New Book</a></li>
				</ul>
			</li>
			{{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}
		</ul>
	</aside>
</div>