<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/admin/assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="/admin/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['/admin/assets/css/fonts.min.css']
			},
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
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
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
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
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
						<!-- Profile -->
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="/admin/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="/admin/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
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
			<div class="container">
				<div class="page-inner">
					<h4 class="page-title">Frequently Asked Questions</h4>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-space">
								<div class="card-header">
									<h4 class="card-title">FAQ</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-md-12">
											<div class="tab-content" id="v-pills-tabContent">
												<div class="tab-pane fade active show" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
													<div class="accordion accordion-secondary">
														<div class="card">
															<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" role="button">
																<div class="span-icon">
																	<div class="flaticon-box-1"></div>
																</div>
																<div class="span-title">
																	Skyx Token
																</div>
																<div class="span-mode"></div>
															</div>

															<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
																<div class="card-body">
																	SKX merupakan token collateral milik SKYX. Dengan memiliki SKX, Anda akan mendapatkan garansi alokasi <b> private sale dari berbagai macam proyek berkualitas.</b>
																</div>
															</div>
														</div>
														<div class="card">
															<div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
																<div class="span-icon">
																	<div class="flaticon-box-1"></div>
																</div>
																<div class="span-title">
																	BENEFITS FOR SKX HOLDERS
																</div>
																<div class="span-mode"></div>
															</div>
															<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
																<div class="card-body">
																	<ol>
																		<li>Garansi alokasi ICO dengan harga private sale, <b>bottom price</b></li>
																		<li>Screening berlapis untuk mendapatkan <b>project terbaik</b></li>
																		<li>Harga SKX fixed 1$, <b>harga stabil dan redeemable to BUSD</b></li>
																	</ol>
																</div>
															</div>
														</div>
														<div class="card">
															<div class="card-header collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" role="button">
																<div class="span-icon">
																	<div class="flaticon-box-1"></div>
																</div>
																<div class="span-title">
																	Tahapan :
																</div>
																<div class="span-mode"></div>
															</div>
															<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
																<div class="card-body">
																	<ol>
																		<li>Tukar BUSD dengan SKX token dengan harga tetap 1 SKX = 1 BUSD</li>
																		<li>SKX holder akan mendapatkan privilege harga awal projek – projek baru, bahkan harga private sale (lebih murah dari public sale)</li>
																		<li>SKX holder dapet membeli maksimum alokasi yang didapat sesuai dengan bobot yang dimiliki</li>
																		<li>Private sale akan dibagikan tepat waktu sesuai dengan timeline projek </li>
																		<li>Token langsung dikirimkan ke wallet SKX holder </li>
																	</ol>
																</div>
															</div>
														</div>
														<div class="card">
															<div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
																<div class="span-icon">
																	<div class="flaticon-box-1"></div>
																</div>
																<div class="span-title">
																	POOL WEIGHT :
																</div>
																<div class="span-mode"></div>
															</div>
															<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
																<div class="card-body">
																	<b>1 SKX = 1 BUSD</b>
																	<p>
																	<ul>
																		<li>Tier 1 : 2500 SKX min alokasi bobot 1</li>
																		<li>Tier 2 : 5000 SKX min alokasi bobot 2.5</li>
																		<li>Tier 3 : 10.000 SKX min alokasi bobot 6</li>
																		<li>Tier 4 : 25.000 SKX min alokasi bobot 18 - (limited for 4 holders)</li>
																	</ul>
																	</p>
																	<p><span>*</span>SKX token redeemable after 3 months <br><span>*</span>SKX token tidak untuk diperjualbelikan, dan hanya bisa redeem dari wallet awal investor </p>
																	<p></p>
																</div>
															</div>
														</div>
													</div>
												</div>
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