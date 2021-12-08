<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

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
								<table id="basic-datatables" class="display table table-striped table-hover">
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
										<?php foreach ($users as $data) : ?>
											<tr>
												<td><?= $data['first_name'] ?></td>
												<td><?= $data['last_name'] ?></td>
												<td><?= $data['username'] ?></td>
												<td><?= $data['email'] ?></td>
												<td><?= $data['phone'] ?></td>
												<td><?= $data['created_at'] ?></td>
											</tr>
										<?php endforeach; ?>
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

<?= $this->endSection(); ?>