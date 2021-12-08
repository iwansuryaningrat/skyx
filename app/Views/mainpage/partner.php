<?= $this->extend('mainpage/template/layout'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<header>
	<div class="container">
		<div class="head__other d-flex justify-content-center align-items-center">
			<div class="header__main">
				<h1>Partnership</h1>
				<p class="txt__second">We reach out with leading companies in the crypto industry that have a lot of experience.</p>
			</div>
		</div>
	</div>
</header>
<!-- end header -->

<!-- partnership section -->
<div class="sec__x sec__b">
	<div class="container">
		<div>
			<div class="partnership">
				<?php foreach ($partner as $row) : ?>
					<figure class="partner__icon">
						<a href="<?php if ($row['link'] == null) : echo '#';
									else : echo $row['link'];
									endif; ?>" target="_blank"><img src="/foto/partnership/<?= $row['logo']; ?>" alt="..." class="pship__tt" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $row['nama']; ?>"></a>
						<div class="partner__cover"></div>
					</figure>
				<?php endforeach; ?>
			</div> <!-- end pship -->
		</div>
	</div>
</div>
<!-- end partnership section -->

<?= $this->endSection(); ?>