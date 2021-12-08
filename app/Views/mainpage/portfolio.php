<?= $this->extend('mainpage/template/layout'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<header>
	<div class="container">
		<div class="head__other d-flex justify-content-center align-items-center">
			<div class="header__main">
				<h1>Portfolio</h1>
				<p class="txt__second">We have many projects that you can participate in and previously also had the best portfolio which we think can help you to manage your finances.</p>
			</div>
		</div>
	</div>
</header>
<!-- end header -->

<!-- portfolio section -->
<div class="sec__x sec__b">
	<div class="container">
		<div>
			<div class="portfo">
				<?php foreach ($porto as $row) : ?>
					<figure class="portfo__icon">
						<a href="<?php if ($row['link'] == null) : echo '#';
									else : echo $row['link'];
									endif; ?>" target="_blank"><img src="/foto/portfolio/<?= $row['logo']; ?>" alt="..." class="pship__tt" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $row['nama']; ?>"></a>
					</figure>
				<?php endforeach; ?>
			</div> <!-- end pship -->
		</div>
	</div> <!-- end container -->
</div>
<!-- end portfolio section -->

<?= $this->endSection(); ?>