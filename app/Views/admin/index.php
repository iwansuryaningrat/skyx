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

<?= $this->section('script'); ?>

<!-- Circle Chart Script -->
<script>
	Circles.create({
		id: 'new-subscribers',
		radius: 45,
		value: <?= $newSubscribers; ?>,
		maxValue: 10000,
		width: 7,
		text: <?= $newSubscribers; ?>,
		colors: ['#f1f1f1', '#FF9E27'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})

	Circles.create({
		id: 'today-visitors',
		radius: 45,
		value: <?= $visitors; ?>,
		maxValue: 10000,
		width: 7,
		text: <?= $visitors; ?>,
		colors: ['#f1f1f1', '#2BB930'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})

	Circles.create({
		id: 'total-subscribers',
		radius: 45,
		value: <?= $jumlah; ?>,
		maxValue: 10000,
		width: 7,
		text: <?= $jumlah; ?>,
		colors: ['#f1f1f1', '#F25961'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})
</script>

<!-- myChartLegend Script -->
<script>
	//Chart

	var ctx = document.getElementById('statisticsChart').getContext('2d');

	var statisticsChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
			datasets: [{
				label: "New Subscribers",
				borderColor: '#f3545d',
				pointBackgroundColor: 'rgba(243, 84, 93, 0.6)',
				pointRadius: 0,
				backgroundColor: 'rgba(243, 84, 93, 0.4)',
				legendColor: '#f3545d',
				fill: true,
				borderWidth: 2,
				data: [<?php for ($i = 0; $i < 12; $i++) {
							echo $databulan[$i] . ',';
						} ?>]
			}, {
				label: "Visitors",
				borderColor: '#fdaf4b',
				pointBackgroundColor: 'rgba(253, 175, 75, 0.6)',
				pointRadius: 0,
				backgroundColor: 'rgba(253, 175, 75, 0.4)',
				legendColor: '#fdaf4b',
				fill: true,
				borderWidth: 2,
				data: [<?php for ($i = 0; $i < 12; $i++) {
							echo $visitorsMonthly[$i] . ',';
						} ?>]
			}, {
				label: "Total Subscribers",
				borderColor: '#177dff',
				pointBackgroundColor: 'rgba(23, 125, 255, 0.6)',
				pointRadius: 0,
				backgroundColor: 'rgba(23, 125, 255, 0.4)',
				legendColor: '#177dff',
				fill: true,
				borderWidth: 2,
				data: [<?php for ($i = 0; $i < 12; $i++) {
							echo $kumulatif[$i] . ',';
						} ?>]
			}, {
				label: "Total Visitors",
				borderColor: '#00FFFF',
				pointBackgroundColor: 'rgba(0, 255, 255, 0.6)',
				pointRadius: 0,
				backgroundColor: 'rgba(0, 255, 255, 0.4)',
				legendColor: '#00FFFF',
				fill: true,
				borderWidth: 2,
				data: [<?php for ($i = 0; $i < 12; $i++) {
							echo $visitorsKumulatif[$i] . ',';
						} ?>]
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false
			},
			tooltips: {
				bodySpacing: 4,
				mode: "nearest",
				intersect: 0,
				position: "nearest",
				xPadding: 10,
				yPadding: 10,
				caretPadding: 10
			},
			layout: {
				padding: {
					left: 5,
					right: 5,
					top: 15,
					bottom: 15
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						fontStyle: "500",
						beginAtZero: false,
						maxTicksLimit: 5,
						padding: 10
					},
					gridLines: {
						drawTicks: false,
						display: false
					}
				}],
				xAxes: [{
					gridLines: {
						zeroLineColor: "transparent"
					},
					ticks: {
						padding: 10,
						fontStyle: "500"
					}
				}]
			},
			legendCallback: function(chart) {
				var text = [];
				text.push('<ul class="' + chart.id + '-legend html-legend">');
				for (var i = 0; i < chart.data.datasets.length; i++) {
					text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
					if (chart.data.datasets[i].label) {
						text.push(chart.data.datasets[i].label);
					}
					text.push('</li>');
				}
				text.push('</ul>');
				return text.join('');
			}
		}
	});

	var myLegendContainer = document.getElementById("myChartLegend");

	// generate HTML legend
	myLegendContainer.innerHTML = statisticsChart.generateLegend();

	// bind onClick event to all LI-tags of the legend
	var legendItems = myLegendContainer.getElementsByTagName('li');
	for (var i = 0; i < legendItems.length; i += 1) {
		legendItems[i].addEventListener("click", legendClickCallback, false);
	}
</script>

<!-- Notify Script -->
<script>
	//Notify
	$.notify({
		icon: 'flaticon-alarm-1',
		title: 'Wellcome Back!!',
		message: 'Wellcome back to Skyx Admin Dashboard',
	}, {
		type: 'secondary',
		placement: {
			from: "bottom",
			align: "right"
		},
		time: 1000,
	});
</script>

<?= $this->endSection(); ?>