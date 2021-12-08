<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<!-- Main Panel -->
<div class="main-panel">
	<div class="container">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Data Teams</h4>
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
						<a href="/admin/teams">Data Teams</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Data Teams</h4>
								<a class="d-block ml-auto" href="/add/addteamform">
									<button class="btn btn-primary btn-round d-flex align-items-center">
										<i class="la flaticon-add d-block mr-2"></i>
										<span class="d-block">Add Team</span>
									</button>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Jabatan</th>
											<th>Foto</th>
											<th>Sosial Media</th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Nama</th>
											<th>Jabatan</th>
											<th>Foto</th>
											<th>Sosial Media</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>
										<?php foreach ($data as $row) : ?>
											<tr>
												<td><?= $row['nama']; ?></td>
												<td><?= $row['jabatan']; ?></td>
												<td><img src="/foto/teams/<?= $row['foto']; ?>" style="width : 48px;" alt=""></td>
												<td>
													<!-- Sosmed Icon -->
													<div class="form-button-action">
														<a href="<?= $row['ig']; ?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Instagram">
																<i class="fab fa-instagram"></i>
															</button>
														</a>
														<a href="<?= $row['linkedin']; ?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Linkedin">
																<i class="fab fa-linkedin"></i>
															</button>
														</a>
													</div>
												</td>
												<td>
													<div class="form-button-action">
														<a href="/edit/editteamform/<?= $row['id']; ?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
																<i class="fa fa-edit"></i>
															</button>
														</a>
														<a href="/edit/deleteteam/<?= $row['id']; ?>">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
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