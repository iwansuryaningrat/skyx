<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/admin/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="/admin/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/admin/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<style>
		.logo-header a {
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.logo-header a img {
			/* width: 100%; */
			height: 48px;
			/* margin: auto; */
		}
	</style>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/admin/assets/css/atlantis.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/admin/assets/css/demo.css">
</head>
<body>
	<div class="wrapper">	
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				<a href="/admin/index" class="logo">
					<img src="/admin/assets/img/skyx-logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
					data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<!-- Search -->
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
								aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<!-- Messages -->
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn"
								aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img">
													<img src="/admin/assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-img">
													<img src="/admin/assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-img">
													<img src="/admin/assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-img">
													<img src="/admin/assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i
											class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<!-- Notifications -->
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i>
												</div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i>
												</div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-img">
													<img src="/admin/assets/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span>
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i
											class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<!-- Quick Menu -->
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-danger rounded-circle">
														<i class="far fa-calendar-alt"></i>
													</div>
													<span class="text">Calendar</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-warning rounded-circle">
														<i class="fas fa-map"></i>
													</div>
													<span class="text">Maps</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-info rounded-circle">
														<i class="fas fa-file-excel"></i>
													</div>
													<span class="text">Reports</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-success rounded-circle">
														<i class="fas fa-envelope"></i>
													</div>
													<span class="text">Emails</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-primary rounded-circle">
														<i class="fas fa-file-invoice-dollar"></i>
													</div>
													<span class="text">Invoice</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-secondary rounded-circle">
														<i class="fas fa-credit-card"></i>
													</div>
													<span class="text">Payments</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link quick-sidebar-toggler">
								<i class="fa fa-th"></i>
							</a>
						</li>
						<!-- Profile -->
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
								aria-expanded="false">
								<div class="avatar-sm">
									<img src="/admin/assets/img/profile.jpg" alt="..."
										class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="/admin/assets/img/profile.jpg"
													alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html"
													class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<!-- User -->
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="/admin/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<!-- Dashboard -->
						<li class="nav-item <?php if ($tab == "dashboard") echo "active"; ?>">
							<a href="/admin/index">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<!-- Users -->
						<li class="nav-item <?php if ($tab == "users") echo "active"; ?>">
							<a href="/admin/users">
								<i class="fas fa-users"></i>
								<p>Users</p>
							</a>
						</li>
						<!-- Teams -->
						<li class="nav-item <?php if ($tab == "teams") echo "active"; ?>">
							<a href="/admin/teams">
								<i class="fas fa-id-card"></i>
								<p>Teams</p>
							</a>
						</li>
						<!-- Projects -->
						<li class="nav-item <?php if ($tab == "projects") echo "active"; ?>">
							<a href="/admin/projects">
								<i class="fas fa-file-signature"></i>
								<p>Projects</p>
							</a>
						</li>
						<!-- Articles -->
						<li class="nav-item <?php if ($tab == "artikel") echo "active"; ?>">
							<a href="/admin/artikel">
								<i class="fas fa-newspaper"></i>
								<p>Artikel</p>
							</a>
						</li>
						<!-- Faqs -->
						<li class="nav-item <?php if ($tab == "faqs") echo "active"; ?>">
							<a href="/admin/faqs">
								<i class="far fa-question-circle"></i>
								<p>Faqs</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<!-- Main Panel -->
		<div class="main-panel">
			<div class="container container-full">
				<div class="page-navs bg-white">
					<div class="nav-scroller">
						<div class="nav nav-tabs nav-line nav-color-secondary d-flex align-items-center justify-contents-center w-100">
							<a class="nav-link active show" data-toggle="tab" href="#tab1">All Projects</a>
							<a class="nav-link mr-5" data-toggle="tab" href="#tab2">Data Projects</a>
							<div class="ml-auto">
								<a href="#" class="btn btn-success">New Project</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<div class="row row-projects">
						<div class="col-sm-6 col-lg-3">
							<div class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="/admin/assets/img/examples/product1.jpg" alt="Product 1">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold">Play Golf</h4>
									<p class="text-muted small mb-2">Last updated: Yesterday 3:12 AM</p>
									<div class="avatar-group">
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<span class="avatar-title rounded-circle border border-white bg-success">+</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="/admin/assets/img/examples/product7.jpg" alt="Product 7">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold">Brainstorming</h4>
									<p class="text-muted small mb-2">Last updated: Monday 1:32 AM</p>
									<div class="avatar-group">
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<span class="avatar-title rounded-circle border border-white bg-success">+</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="/admin/assets/img/examples/product3.jpg" alt="Product 3">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold">Wisata Alam</h4>
									<p class="text-muted small mb-2">Last updated: Monday 3:30 AM</p>
									<div class="avatar-group">
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<span class="avatar-title rounded-circle border border-white bg-success">+</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="/admin/assets/img/examples/product4.jpg" alt="Product 4">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold">Analysis</h4>
									<p class="text-muted small mb-2">Last updated: Sunday 3:12 PM</p>
									<div class="avatar-group">
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<span class="avatar-title rounded-circle border border-white bg-success">+</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="/admin/assets/img/examples/product5.jpg" alt="Product 5">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold">Meeting</h4>
									<p class="text-muted small mb-2">Last updated: Friday 1:12 PM</p>
									<div class="avatar-group">
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<span class="avatar-title rounded-circle border border-white bg-success">+</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="/admin/assets/img/examples/product8.jpg" alt="Product 8">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold">Ngopi</h4>
									<p class="text-muted small mb-2">Last updated: Yesterday 3:12 AM</p>
									<div class="avatar-group">
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<span class="avatar-title rounded-circle border border-white bg-success">+</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card">
								<div class="p-2">
									<img class="card-img-top rounded" src="/admin/assets/img/examples/product2.jpg" alt="Product 2">
								</div>
								<div class="card-body pt-2">
									<h4 class="mb-1 fw-bold">Travelling</h4>
									<p class="text-muted small mb-2">Last updated: Friday 7:45 AM</p>
									<div class="avatar-group">
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<img src="/admin/assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="avatar avatar-sm">
											<span class="avatar-title rounded-circle border border-white bg-success">+</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								
							</li>
							<li class="nav-item">
								
							</li>
							<li class="nav-item">
								
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						Skyx © 2021 Copyright. All right reserved
					</div>
				</div>
			</footer>
		</div>
		
	</div>
	<!--   Core JS Files   -->
	<script src="/admin/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/admin/assets/js/core/popper.min.js"></script>
	<script src="/admin/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="/admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="/admin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="/admin/assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/admin/assets/js/setting-demo.js"></script>
</body>
</html>