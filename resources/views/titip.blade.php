<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>E-Library &mdash; Stisla</title>

  @include('layouts.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
		<!-- Header and Navigation Bar -->
		<div class="navbar-bg"></div>
		<nav class="navbar navbar-expand-lg main-navbar">
			<ul class="navbar-nav mr-auto">
				<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
			</ul>
			<ul class="navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
					<img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
					<div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
				<a href="#" class="dropdown-item has-icon text-danger">
					<i class="fas fa-sign-out-alt"></i> Logout
				</a>
				</div>
			</li>
			</ul>
		</nav>

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
						<a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
					</li>
					<li class="menu-header">Controlling</li>
					<li>
						<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
						</ul>
					</li>
					<li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
						</ul>
					</li>
					<li class="menu-header">Stisla</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
						<ul class="dropdown-menu">
						<li><a class="nav-link" href="components-article.html">Article</a></li>
						<li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
						<li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
						<li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>
						<li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
						<li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
						<li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
						<li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>
						<li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
						<li><a class="nav-link" href="components-tab.html">Tab</a></li>
						<li><a class="nav-link" href="components-table.html">Table</a></li>
						<li><a class="nav-link" href="components-user.html">User</a></li>
						<li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
						<ul class="dropdown-menu">
						<li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
						<li><a class="nav-link" href="forms-editor.html">Editor</a></li>
						<li><a class="nav-link" href="forms-validation.html">Validation</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
						<ul class="dropdown-menu">
						<li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
						<li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
						<li><a href="gmaps-geocoding.html">Geocoding</a></li>
						<li><a href="gmaps-geolocation.html">Geolocation</a></li>
						<li><a href="gmaps-marker.html">Marker</a></li>
						<li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
						<li><a href="gmaps-route.html">Route</a></li>
						<li><a href="gmaps-simple.html">Simple</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
						<ul class="dropdown-menu">
						<li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
						<li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
						<li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
						<li><a class="nav-link" href="modules-flag.html">Flag</a></li>
						<li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
						<li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
						<li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
						<li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
						<li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
						<li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
						<li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
						<li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
						</ul>
					</li>
					<li class="menu-header">Pages</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
						<ul class="dropdown-menu">
						<li><a href="auth-forgot-password.html">Forgot Password</a></li>
						<li><a href="auth-login.html">Login</a></li>
						<li><a class="beep beep-sidebar" href="auth-login-2.html">Login 2</a></li>
						<li><a href="auth-register.html">Register</a></li>
						<li><a href="auth-reset-password.html">Reset Password</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
						<ul class="dropdown-menu">
						<li><a class="nav-link" href="errors-503.html">503</a></li>
						<li><a class="nav-link" href="errors-403.html">403</a></li>
						<li><a class="nav-link" href="errors-404.html">404</a></li>
						<li><a class="nav-link" href="errors-500.html">500</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
						<ul class="dropdown-menu">
						<li><a class="nav-link" href="features-activities.html">Activities</a></li>
						<li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
						<li><a class="nav-link" href="features-posts.html">Posts</a></li>
						<li><a class="nav-link" href="features-profile.html">Profile</a></li>
						<li><a class="nav-link" href="features-settings.html">Settings</a></li>
						<li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
						<li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
						<ul class="dropdown-menu">
						<li><a href="utilities-contact.html">Contact</a></li>
						<li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
						<li><a href="utilities-subscribe.html">Subscribe</a></li>
						</ul>
					</li>
					<li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
				</ul>

				<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
					<a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
						<i class="fas fa-rocket"></i> Documentation
					</a>
				</div>
			</aside>
		</div>

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
									<h4>Total Admin</h4>
								</div>
								<div class="card-body">
									10
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
									<h4>News</h4>
								</div>
								<div class="card-body">
									42
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
									<h4>Online Users</h4>
								</div>
								<div class="card-body">
									47
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Main Content Table -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4>Latest Posts</h4>
								<div class="card-header-action">
									<a href="#" class="btn btn-primary">View All</a>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table table-striped mb-0">
										<thead>
											<tr>
											<th>Title</th>
											<th>Author</th>
											<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													Introduction Laravel 5
												</td>
												<td>
													<a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
												</td>
												<td>
													<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
													<a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													Laravel 5 Tutorial - Installation
													<div class="table-links">
													in <a href="#">Web Development</a>
													<div class="bullet"></div>
													<a href="#">View</a>
													</div>
												</td>
												<td>
													<a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
												</td>
												<td>
													<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
													<a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													Laravel 5 Tutorial - MVC
													<div class="table-links">
													in <a href="#">Web Development</a>
													<div class="bullet"></div>
													<a href="#">View</a>
													</div>
												</td>
												<td>
													<a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
												</td>
												<td>
													<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
													<a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													Laravel 5 Tutorial - Migration
													<div class="table-links">
													in <a href="#">Web Development</a>
													<div class="bullet"></div>
													<a href="#">View</a>
													</div>
												</td>
												<td>
													<a href="#" class="font-weight-600"><img src="../assets/img/avatar/avatar-1.png" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
												</td>
												<td>
													<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
													<a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Add Section Form -->
			<!-- Header Form -->
			<h2 class="section-title">Create New Post</h2>
            <p class="section-lead">On this page you can create a new post and fill in all fields.</p>

			<!-- Input Form -->
			<div class="row">
				<div class="col-12">
				  	<div class="card">
						<div class="card-header">
							<h4>Write Your Post</h4>
						</div>
						<div class="card-body">
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
								<div class="col-sm-12 col-md-7">
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
								<div class="col-sm-12 col-md-7">
									<select class="form-control selectric">
										<option>Tech</option>
										<option>News</option>
										<option>Political</option>
									</select>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
								<div class="col-sm-12 col-md-7">
									<textarea class="summernote-simple"></textarea>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
								<div class="col-sm-12 col-md-7">
									<div id="image-preview" class="image-preview">
										<label for="image-upload" id="image-label">Choose File</label>
										<input type="file" name="image" id="image-upload" />
									</div>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
								<div class="col-sm-12 col-md-7">
									<input type="text" class="form-control inputtags">
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
								<div class="col-sm-12 col-md-7">
									<select class="form-control selectric">
										<option>Publish</option>
										<option>Draft</option>
										<option>Pending</option>
									</select>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
								<div class="col-sm-12 col-md-7">
									<button class="btn btn-primary">Create Post</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Another Table Style -->
			<div class="row mt-4">
				<div class="col-12">
				  <div class="card">
					<div class="card-header">
					  <h4>All Posts</h4>
					  <a href="features-post-create.html" class="ml-auto btn btn-primary">Add New</a>
					</div>
					<div class="card-body">
					  <div class="float-left">
						<select class="form-control selectric">
						  <option>Action For Selected</option>
						  <option>Move to Draft</option>
						  <option>Move to Pending</option>
						  <option>Delete Pemanently</option>
						</select>
					  </div>
					  <div class="float-right">
						<form>
						  <div class="input-group">
							<input type="text" class="form-control" placeholder="Search">
							<div class="input-group-append">
							  <button class="btn btn-primary"><i class="fas fa-search"></i></button>
							</div>
						  </div>
						</form>
					  </div>
  
					  <div class="clearfix mb-3"></div>
  
					  <div class="table-responsive">
						<table class="table table-striped">
						  <tr>
							<th class="text-center pt-2">
							  <div class="custom-checkbox custom-checkbox-table custom-control">
								<input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
								<label for="checkbox-all" class="custom-control-label">&nbsp;</label>
							  </div>
							</th>
							<th>Title</th>
							<th>Category</th>
							<th>Author</th>
							<th>Created At</th>
							<th>Status</th>
						  </tr>
						  <tr>
							<td>
							  <div class="custom-checkbox custom-control">
								<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
								<label for="checkbox-2" class="custom-control-label">&nbsp;</label>
							  </div>
							</td>
							<td>Laravel 5 Tutorial: Introduction
							  <div class="table-links">
								<a href="#">View</a>
								<div class="bullet"></div>
								<a href="#">Edit</a>
								<div class="bullet"></div>
								<a href="#" class="text-danger">Trash</a>
							  </div>
							</td>
							<td>
							  <a href="#">Web Developer</a>,
							  <a href="#">Tutorial</a>
							</td>
							<td>
							  <a href="#">
								<img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
							  </a>
							</td>
							<td>2018-01-20</td>
							<td><div class="badge badge-primary">Published</div></td>
						  </tr>
						  <tr>
							<td>
							  <div class="custom-checkbox custom-control">
								<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
								<label for="checkbox-3" class="custom-control-label">&nbsp;</label>
							  </div>
							</td>
							<td>Laravel 5 Tutorial: Installing
							  <div class="table-links">
								<a href="#">View</a>
								<div class="bullet"></div>
								<a href="#">Edit</a>
								<div class="bullet"></div>
								<a href="#" class="text-danger">Trash</a>
							  </div>
							</td>
							<td>
							  <a href="#">Web Developer</a>,
							  <a href="#">Tutorial</a>
							</td>
							<td>
							  <a href="#">
								<img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
							  </a>
							</td>
							<td>2018-01-20</td>
							<td><div class="badge badge-primary">Published</div></td>
						  </tr>
						  <tr>
							<td>
							  <div class="custom-checkbox custom-control">
								<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
								<label for="checkbox-4" class="custom-control-label">&nbsp;</label>
							  </div>
							</td>
							<td>Laravel 5 Tutorial: MVC
							  <div class="table-links">
								<a href="#">View</a>
								<div class="bullet"></div>
								<a href="#">Edit</a>
								<div class="bullet"></div>
								<a href="#" class="text-danger">Trash</a>
							  </div>
							</td>
							<td>
							  <a href="#">Web Developer</a>,
							  <a href="#">Tutorial</a>
							</td>
							<td>
							  <a href="#">
								<img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
							  </a>
							</td>
							<td>2018-01-20</td>
							<td><div class="badge badge-primary">Published</div></td>
						  </tr>
						  <tr>
							<td>
							  <div class="custom-checkbox custom-control">
								<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
								<label for="checkbox-5" class="custom-control-label">&nbsp;</label>
							  </div>
							</td>
							<td>Laravel 5 Tutorial: CRUD
							  <div class="table-links">
								<a href="#">View</a>
								<div class="bullet"></div>
								<a href="#">Edit</a>
								<div class="bullet"></div>
								<a href="#" class="text-danger">Trash</a>
							  </div>
							</td>
							<td>
							  <a href="#">Web Developer</a>,
							  <a href="#">Tutorial</a>
							</td>
							<td>
							  <a href="#">
								<img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
							  </a>
							</td>
							<td>2018-01-20</td>
							<td><div class="badge badge-danger">Draft</div></td>
						  </tr>
						  <tr>
							<td>
							  <div class="custom-checkbox custom-control">
								<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
								<label for="checkbox-1" class="custom-control-label">&nbsp;</label>
							  </div>
							</td>
							<td>Laravel 5 Tutorial: Deployment
							  <div class="table-links">
								<a href="#">View</a>
								<div class="bullet"></div>
								<a href="#">Edit</a>
								<div class="bullet"></div>
								<a href="#" class="text-danger">Trash</a>
							  </div>
							</td>
							<td>
							  <a href="#">Web Developer</a>,
							  <a href="#">Tutorial</a>
							</td>
							<td>
							  <a href="#">
								<img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
							  </a>
							</td>
							<td>2018-01-20</td>
							<td><div class="badge badge-warning">Pending</div></td>
						  </tr>
						</table>
					  </div>
					  <div class="float-right">
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
					  </div>
					</div>
				  </div>
				</div>
			  </div>
        </section>
      </div>

	  <!-- Footer -->
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  @include('layouts.script')
</body>
</html>
