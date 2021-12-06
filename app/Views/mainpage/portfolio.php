<?= $this->extend('mainpage/template/layout'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<header>
	<div class="container">
		<div class="head__other d-flex justify-content-center align-items-center">
			<div class="header__main">
				<h1>Portfolio</h1>
				<p class="txt__second">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident amet soluta, est sapiente architecto praesentium necessitatibus placeat nemo.</p>
			</div>
		</div>
	</div>
</header>
<!-- end header -->

<!-- portfolio section -->
<div class="sec__x sec__y">
	<div class="container">
		<div>
			<div class="portfo">
				<figure class="portfo__icon">
					<a href="https://universeisland.games/" target="_blank"><img src="/mainpage/img/partnership/universeisland-logo.png" alt="..." class="pship__tt" data-bs-toggle="tooltip" data-bs-placement="top" title="Universe Island"></a>
				</figure>
				<figure class="portfo__icon">
					<a href="https://www.solchicks.io/" target="_blank"><img src="/mainpage/img/partnership/solchicks-logo.png" alt="..." class="pship__tt" data-bs-toggle="tooltip" data-bs-placement="top" title="SolChicks"></a>
				</figure>
				<figure class="portfo__icon">
					<a href="https://wingswap.io/" target="_blank"><img src="/mainpage/img/partnership/wingswap-logo.png" alt="..." class="pship__tt" data-bs-toggle="tooltip" data-bs-placement="top" title="WingSwap"></a>
				</figure>
			</div> <!-- end pship -->
		</div>
	</div> <!-- end container -->
</div>
<!-- end portfolio section -->

<?= $this->endSection(); ?>