<?= $this->extend('mainpage/template/layout'); ?>

<?= $this->section('mainpage'); ?>

<!-- jumbotron section -->
<div class="overflow-hidden">
	<div class="jumbotron sec__x">
		<div class="container">
			<div class="row">
				<!-- left -->
				<div class="col-lg-7 col-12 left">
					<h1>SKYX VENTURE CAPITAL</h1>
					<p class="txt__second">One-stop solutions for blockchain projects investments</p>
					<div class="skyx__btn__gs">
						<a href="/home/contact" class="btn__gs d-flex align-items-center">Get started<i class="ai-arrow-right"></i></a>
					</div>
				</div>

				<!-- right -->
				<div class="col-lg-5 col-12">
					<div class="relative__img">
						<div class="hero__img">
							<img class="absolute__img" src="/mainpage/img/hero-bitcoin.svg" alt="...">
						</div>
					</div>
				</div> <!-- end col -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div> <!-- end jumbotron -->
</div>
<!-- end jumbotron section -->

<!-- top project -->
<div class="sec__x sec__y skyx__none">
	<div class="container">
		<div class="text-center">
			<h2 class="title__info">Top Project</h2>
		</div> <!-- end text center -->
		<div class="tp__content">
			<div id="tp" class="owl-carousel owl-theme">
				<?php foreach ($projects as $data) : ?>
					<?php  ?>
					<!-- card1 -->
					<div>
						<a href="project-view.html" class="tp__link d-block">
							<div class="tp__card my-3 mx-1">
								<div>
									<div class="tp__img"></div>
									<p class="fw-bold tp__title"><?= $data['nama']; ?></p>
									<p class="tp__desc tp__fz tp__seccond"><?= $data['deskripsi']; ?></p>
								</div>

								<div>
									<div>
										<p class="fw-bold tp__fz tp__mb">Price : 1 BON = <?= $data['price'] . " " . $data['satuan']; ?> BUSD</p>
										<p class="fw-bold tp__fz mb-0">Start : 23 Nov = 09:00 UTC</p>
									</div>

									<div class="tp__project">
										<p class="tp__fz-sm">Open in 20 minutes</p>
										<div class="progress__bar"></div>
										<div class="d-flex justify-content-between align-items-center">
											<p class="tp__fz-sm">0 BUSD</p>
											<p class="tp__fz-sm"><?= $data['bon']; ?> / <?= $data['total_bon'] ?> BON</p>
										</div>
									</div>

									<div>
										<div class="d-flex align-items-center justify-content-between tp__mb">
											<p class="tp__fz fw-bold tp__second mb-0">TOTAL RAISED</p>
											<p class="tp__fz fw-bold tp__second mb-0">1X =</p>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<p class="tp__fz fw-bold mb-0">$ <?= $data['total_raised']; ?></p>
											<p class="tp__fz fw-bold mb-0">$ 15,28</p>
										</div>
									</div>
								</div>
							</div> <!-- end tp card -->
						</a> <!-- end tp link -->
					</div>
				<?php endforeach; ?>
			</div>
		</div> <!-- end tp content -->

		<a href="/home/project" class="tp__va"><span class="d-block me-2">View all</span><i class="bi bi-arrow-right-short d-flex align-items-center"></i></a>
	</div> <!-- end container -->
</div>
<!-- end top projects -->

<!-- info section -->
<div class="sec__x sec__y">
	<div class="container">
		<div class="row">
			<!-- left -->
			<div class="col-lg-6 col-12">
				<div class="info__l">
					<img class="img__info" src="/mainpage/img/image-info.svg" alt="image-info-section">
				</div>
			</div>

			<!-- right -->
			<div class="col-lg-6 col-12">
				<div class="info__r">
					<div id="info" class="owl-carousel owl-theme">
						<?php foreach ($artikel as $data) : ?>
							<div class="pe-3">
								<div class="card__info">
									<h2 class="title__info"><?= $data['judul']; ?></h2>
									<p class="txt__desc"><?= $data['preview']; ?></p>
									<div class="btn__lm">
										<a href="/home/about" class="d-flex align-items-center"><span class="d-flex">Learn more</span><i class="bi bi-arrow-right-short d-flex align-items-center"></i></a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

					</div> <!-- end info owl carousel -->
				</div> <!-- end info 4 -->
			</div> <!-- end col -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</div>
<!-- end info section -->

<?= $this->endSection(); ?>