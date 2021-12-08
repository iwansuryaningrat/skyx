<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<!-- Main Panels -->
<div class="main-panel">
	<div class="container">
		<div class="panel-header bg-primary-gradient">
			<div class="page-inner py-5">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
					<div>
						<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
						<h5 class="text-white op-7 mb-2">Admin Dashboard for Skyx Landing Page</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="page-inner mt--5">

			<!-- Overall statistics -->
			<div class="row mt--2">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="card full-height">
						<div class="card-body">
							<div class="card-title">Overall statistics</div>
							<div class="card-category">Daily information about statistics in system</div>
							<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
								<div class="px-2 pb-2 pb-md-0 text-center">
									<div id="new-subscribers"></div>
									<!-- Todays Subscribers -->
									<h6 class="fw-bold mt-3 mb-0">New Subscribers</h6>
								</div>
								<div class="px-2 pb-2 pb-md-0 text-center">
									<div id="today-visitors"></div>
									<!-- Todays Visitors -->
									<h6 class="fw-bold mt-3 mb-0">Today Visitors</h6>
								</div>
								<div class="px-2 pb-2 pb-md-0 text-center">
									<div id="total-subscribers"></div>
									<!-- Total Subscribers -->
									<h6 class="fw-bold mt-3 mb-0">Total Subscribers</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- User Statistics -->
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-head-row">
								<div class="card-title">User Statistics</div>
							</div>
						</div>
						<div class="card-body">
							<div class="chart-container" style="min-height: 375px">
								<canvas id="statisticsChart"></canvas>
							</div>
							<div id="myChartLegend"></div>
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

<?= $this->endSection(); ?>