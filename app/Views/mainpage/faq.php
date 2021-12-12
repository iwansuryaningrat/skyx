<?= $this->extend('mainpage/template/layout'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<header>
	<div class="container">
		<div class="head__other d-flex justify-content-center align-items-center">
			<div class="header__main">
				<h1>FAQ</h1>
				<p class="txt__second">Frequently Asked Questions</p>
			</div>
		</div>
	</div>
</header>
<!-- end header -->

<!-- faq section -->
<div class="sec__x sec__b">
	<div class="container">
		<div>
			<?php foreach ($faqs as $row) : ?>
				<!-- qbox -->
				<div class="qbox">
					<a class="qbox__link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#qbox-<?= $row['id']; ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
						<span><?= $row['pertanyaan']; ?></span>
						<i class="bi bi-caret-down-fill ms-3 qbox__transform"></i>
					</a>

					<div class="collapse" id="qbox-<?= $row['id']; ?>">
						<div class="qbox__collapse">
							<?= $row['jawaban']; ?>
						</div>
					</div>
				</div>
				<!-- end qbox -->
			<?php endforeach; ?>
		</div>
	</div> <!-- end container -->
</div>
<!-- end faq section -->

<?= $this->endSection(); ?>