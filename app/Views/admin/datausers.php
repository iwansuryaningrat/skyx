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
								<table id="users-datatables" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Purpose</th>
											<th>Register at</th>
											<th style="width: 10%">Status</th>
											<th style=" width: 10%">Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Purpose</th>
											<th>Register at</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>
										<?php foreach ($users as $data) : ?>
											<tr>
												<td><?= $data['first_name'] . ' ' . $data['last_name'] ?></td>
												<td><?= $data['email'] ?></td>
												<td><?= $data['phone'] ?></td>
												<td><?= $data['tujuan'] ?></td>
												<td><?= date('j-M-Y', strtotime($data['created_at'])); ?></td>
												<td>
													<span class="badge <?php if ($data['status'] == 'Unread') {
																			echo 'badge-info';
																		} elseif ($data['status'] == 'Readed') {
																			echo 'badge-warning';
																		} else {
																			echo 'badge-success';
																		}
																		?>"><?= $data['status']; ?>
													</span>
												</td>
												<td>
													<div class="form-button-action">
														<a href="/admin/viewdatauser/<?= $data['id']; ?>">
															<button type="button" data-toggle="tooltip" title="Read" class="btn btn-link btn-primary btn-lg" data-original-title="Read">
																<i class="fa fa-edit"></i>
															</button>
														</a>
													</div>
												</td>
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

<?= $this->section('script'); ?>

<script>
	$(document).ready(function() {
		$("#users-datatables").DataTable({
			pageLength: 5,
		});

		var action =
			'<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
	});
</script>

<?= $this->endSection(); ?>