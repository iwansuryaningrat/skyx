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
			<div class="container">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Users</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="/admin/index">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Data</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="/admin/users">Data Users</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Data Users</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Username</th>
													<th>Email</th>
													<th>Phone</th>
													<th>Register at</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Username</th>
													<th>Email</th>
													<th>Phone</th>
													<th>Register at</th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
												</tr>
												<tr>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>2011/07/25</td>
													<td>$170,750</td>
												</tr>
												<tr>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>2009/01/12</td>
													<td>$86,000</td>
												</tr>
												<tr>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2012/03/29</td>
													<td>$433,060</td>
												</tr>
												<tr>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>2008/11/28</td>
													<td>$162,700</td>
												</tr>
												<tr>
													<td>Brielle Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td>2012/12/02</td>
													<td>$372,000</td>
												</tr>
												<tr>
													<td>Herrod Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
												</tr>
												<tr>
													<td>Rhona Davidson</td>
													<td>Integration Specialist</td>
													<td>Tokyo</td>
													<td>55</td>
													<td>2010/10/14</td>
													<td>$327,900</td>
												</tr>
												<tr>
													<td>Colleen Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
												</tr>
												<tr>
													<td>Sonya Frost</td>
													<td>Software Engineer</td>
													<td>Edinburgh</td>
													<td>23</td>
													<td>2008/12/13</td>
													<td>$103,600</td>
												</tr>
												<tr>
													<td>Jena Gaines</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>30</td>
													<td>2008/12/19</td>
													<td>$90,560</td>
												</tr>
												<tr>
													<td>Quinn Flynn</td>
													<td>Support Lead</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2013/03/03</td>
													<td>$342,000</td>
												</tr>
												<tr>
													<td>Charde Marshall</td>
													<td>Regional Director</td>
													<td>San Francisco</td>
													<td>36</td>
													<td>2008/10/16</td>
													<td>$470,600</td>
												</tr>
												<tr>
													<td>Haley Kennedy</td>
													<td>Senior Marketing Designer</td>
													<td>London</td>
													<td>43</td>
													<td>2012/12/18</td>
													<td>$313,500</td>
												</tr>
												<tr>
													<td>Tatyana Fitzpatrick</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>19</td>
													<td>2010/03/17</td>
													<td>$385,750</td>
												</tr>
												<tr>
													<td>Michael Silva</td>
													<td>Marketing Designer</td>
													<td>London</td>
													<td>66</td>
													<td>2012/11/27</td>
													<td>$198,500</td>
												</tr>
												<tr>
													<td>Paul Byrd</td>
													<td>Chief Financial Officer (CFO)</td>
													<td>New York</td>
													<td>64</td>
													<td>2010/06/09</td>
													<td>$725,000</td>
												</tr>
												<tr>
													<td>Gloria Little</td>
													<td>Systems Administrator</td>
													<td>New York</td>
													<td>59</td>
													<td>2009/04/10</td>
													<td>$237,500</td>
												</tr>
												<tr>
													<td>Bradley Greer</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>41</td>
													<td>2012/10/13</td>
													<td>$132,000</td>
												</tr>
												<tr>
													<td>Dai Rios</td>
													<td>Personnel Lead</td>
													<td>Edinburgh</td>
													<td>35</td>
													<td>2012/09/26</td>
													<td>$217,500</td>
												</tr>
												<tr>
													<td>Jenette Caldwell</td>
													<td>Development Lead</td>
													<td>New York</td>
													<td>30</td>
													<td>2011/09/03</td>
													<td>$345,000</td>
												</tr>
												<tr>
													<td>Yuri Berry</td>
													<td>Chief Marketing Officer (CMO)</td>
													<td>New York</td>
													<td>40</td>
													<td>2009/06/25</td>
													<td>$675,000</td>
												</tr>
												<tr>
													<td>Caesar Vance</td>
													<td>Pre-Sales Support</td>
													<td>New York</td>
													<td>21</td>
													<td>2011/12/12</td>
													<td>$106,450</td>
												</tr>
												<tr>
													<td>Doris Wilder</td>
													<td>Sales Assistant</td>
													<td>Sidney</td>
													<td>23</td>
													<td>2010/09/20</td>
													<td>$85,600</td>
												</tr>
												<tr>
													<td>Angelica Ramos</td>
													<td>Chief Executive Officer (CEO)</td>
													<td>London</td>
													<td>47</td>
													<td>2009/10/09</td>
													<td>$1,200,000</td>
												</tr>
												<tr>
													<td>Gavin Joyce</td>
													<td>Developer</td>
													<td>Edinburgh</td>
													<td>42</td>
													<td>2010/12/22</td>
													<td>$92,575</td>
												</tr>
												<tr>
													<td>Jennifer Chang</td>
													<td>Regional Director</td>
													<td>Singapore</td>
													<td>28</td>
													<td>2010/11/14</td>
													<td>$357,650</td>
												</tr>
												<tr>
													<td>Brenden Wagner</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>28</td>
													<td>2011/06/07</td>
													<td>$206,850</td>
												</tr>
												<tr>
													<td>Fiona Green</td>
													<td>Chief Operating Officer (COO)</td>
													<td>San Francisco</td>
													<td>48</td>
													<td>2010/03/11</td>
													<td>$850,000</td>
												</tr>
												<tr>
													<td>Shou Itou</td>
													<td>Regional Marketing</td>
													<td>Tokyo</td>
													<td>20</td>
													<td>2011/08/14</td>
													<td>$163,000</td>
												</tr>
												<tr>
													<td>Michelle House</td>
													<td>Integration Specialist</td>
													<td>Sidney</td>
													<td>37</td>
													<td>2011/06/02</td>
													<td>$95,400</td>
												</tr>
												<tr>
													<td>Suki Burks</td>
													<td>Developer</td>
													<td>London</td>
													<td>53</td>
													<td>2009/10/22</td>
													<td>$114,500</td>
												</tr>
												<tr>
													<td>Prescott Bartlett</td>
													<td>Technical Author</td>
													<td>London</td>
													<td>27</td>
													<td>2011/05/07</td>
													<td>$145,000</td>
												</tr>
												<tr>
													<td>Gavin Cortez</td>
													<td>Team Leader</td>
													<td>San Francisco</td>
													<td>22</td>
													<td>2008/10/26</td>
													<td>$235,500</td>
												</tr>
												<tr>
													<td>Martena Mccray</td>
													<td>Post-Sales support</td>
													<td>Edinburgh</td>
													<td>46</td>
													<td>2011/03/09</td>
													<td>$324,050</td>
												</tr>
												<tr>
													<td>Unity Butler</td>
													<td>Marketing Designer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/12/09</td>
													<td>$85,675</td>
												</tr>
												<tr>
													<td>Howard Hatfield</td>
													<td>Office Manager</td>
													<td>San Francisco</td>
													<td>51</td>
													<td>2008/12/16</td>
													<td>$164,500</td>
												</tr>
												<tr>
													<td>Hope Fuentes</td>
													<td>Secretary</td>
													<td>San Francisco</td>
													<td>41</td>
													<td>2010/02/12</td>
													<td>$109,850</td>
												</tr>
												<tr>
													<td>Vivian Harrell</td>
													<td>Financial Controller</td>
													<td>San Francisco</td>
													<td>62</td>
													<td>2009/02/14</td>
													<td>$452,500</td>
												</tr>
												<tr>
													<td>Timothy Mooney</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>37</td>
													<td>2008/12/11</td>
													<td>$136,200</td>
												</tr>
												<tr>
													<td>Jackson Bradshaw</td>
													<td>Director</td>
													<td>New York</td>
													<td>65</td>
													<td>2008/09/26</td>
													<td>$645,750</td>
												</tr>
												<tr>
													<td>Olivia Liang</td>
													<td>Support Engineer</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2011/02/03</td>
													<td>$234,500</td>
												</tr>
												<tr>
													<td>Bruno Nash</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>38</td>
													<td>2011/05/03</td>
													<td>$163,500</td>
												</tr>
												<tr>
													<td>Sakura Yamamoto</td>
													<td>Support Engineer</td>
													<td>Tokyo</td>
													<td>37</td>
													<td>2009/08/19</td>
													<td>$139,575</td>
												</tr>
												<tr>
													<td>Thor Walton</td>
													<td>Developer</td>
													<td>New York</td>
													<td>61</td>
													<td>2013/08/11</td>
													<td>$98,540</td>
												</tr>
												<tr>
													<td>Finn Camacho</td>
													<td>Support Engineer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/07/07</td>
													<td>$87,500</td>
												</tr>
												<tr>
													<td>Serge Baldwin</td>
													<td>Data Coordinator</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2012/04/09</td>
													<td>$138,575</td>
												</tr>
												<tr>
													<td>Zenaida Frank</td>
													<td>Software Engineer</td>
													<td>New York</td>
													<td>63</td>
													<td>2010/01/04</td>
													<td>$125,250</td>
												</tr>
												<tr>
													<td>Zorita Serrano</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>56</td>
													<td>2012/06/01</td>
													<td>$115,000</td>
												</tr>
												<tr>
													<td>Jennifer Acosta</td>
													<td>Junior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>43</td>
													<td>2013/02/01</td>
													<td>$75,650</td>
												</tr>
												<tr>
													<td>Cara Stevens</td>
													<td>Sales Assistant</td>
													<td>New York</td>
													<td>46</td>
													<td>2011/12/06</td>
													<td>$145,600</td>
												</tr>
												<tr>
													<td>Hermione Butler</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>47</td>
													<td>2011/03/21</td>
													<td>$356,250</td>
												</tr>
												<tr>
													<td>Lael Greer</td>
													<td>Systems Administrator</td>
													<td>London</td>
													<td>21</td>
													<td>2009/02/27</td>
													<td>$103,500</td>
												</tr>
												<tr>
													<td>Jonas Alexander</td>
													<td>Developer</td>
													<td>San Francisco</td>
													<td>30</td>
													<td>2010/07/14</td>
													<td>$86,500</td>
												</tr>
												<tr>
													<td>Shad Decker</td>
													<td>Regional Director</td>
													<td>Edinburgh</td>
													<td>51</td>
													<td>2008/11/13</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Michael Bruce</td>
													<td>Javascript Developer</td>
													<td>Singapore</td>
													<td>29</td>
													<td>2011/06/27</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
												</tr>
											</tbody>
										</table>
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

	<!-- Bootstrap Notify -->
	<script src="/admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	
	<!-- Datatables -->
	<script src="/admin/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Atlantis JS -->
	<script src="/admin/assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/admin/assets/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});
		});
	</script>
</body>
</html>