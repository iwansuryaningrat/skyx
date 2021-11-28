<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- SEO Meta Tags -->
	<meta name="description" content="Skyx merupakan...">
	<meta name="author" content="Skyx">
	<meta name="keywords" content="Skyx,skyx,skx,cryptocurrency">

	<!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="Skyx" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content="Skyx" /> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Skyx merupakan ..." /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

	<!-- Webpage Title -->
	<title><?= $title; ?></title>

	<!-- apple touch icon -->
	<link rel="apple-touch-icon" sizes="57x57" href="">
	<link rel="apple-touch-icon" sizes="72x72" href="">
	<link rel="apple-touch-icon" sizes="76x76" href="">
	<link rel="apple-touch-icon" sizes="114x114" href="">
	<link rel="apple-touch-icon" sizes="120x120" href="">
	<link rel="apple-touch-icon" sizes="144x144" href="">
	<link rel="apple-touch-icon" sizes="180x180" href="">

	<!-- Styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!-- bootstrap styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" integrity="sha512-xnP2tOaCJnzp2d2IqKFcxuOiVCbuessxM6wuiolT9eeEJCyy0Vhcwa4zQvdrZNVqlqaxXhHqsSV1Ww7T2jSCUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap icon -->
	<link rel="stylesheet" href="/mainpage/css/owl.carousel.min.css"> <!-- owl carousel min -->
	<link rel="stylesheet" href="/mainpage/css/owl.theme.default.min.css"> <!-- owl carousel theme default min -->
	<link rel="stylesheet" href="/mainpage/vendor/fontawesome-free-5.15.3-web/css/all.min.css"> <!-- fontawesome free v.5.15 -->
	<link rel="stylesheet" href="/mainpage/vendor/akar-icons-fonts-main/src/css/akar-icons.css"> <!-- akar icon styles -->

	<link rel="stylesheet" href="/mainpage/css/styles.css"> <!-- skyx styles -->

	<!-- Favicon  -->
	<link rel="icon" href="/mainpage/img/favicon.ico">
</head>

<body>
	<!-- navigation section -->
	<nav class="navbar navbar-expand-lg navbar-light navbar__skyx position-sticky sticky-top">
		<div class="container-fluid m__nav">
			<a class="navbar-brand" href="/home/home">
				<img class="nav__img" src="/mainpage/img/skyx-logo.svg" alt="skyx-logo">
			</a> <!-- end navbar bran -->

			<!-- button nav mobile -->
			<div id="mobile-menu" class="mobile__menu">
				<div class="menu__icon">
					<div class="menu mb-2"></div>
					<div class="menu"></div>
				</div> <!-- end menu icon -->
			</div> <!-- end mobile menu -->
			<!-- end button nav mobile -->

			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto">
					<a class="nav-link nav__link <?php if ($tab == 'home') : echo 'active';
													endif; ?>" href=" /home/home">Home</a>
					<a class="nav-link nav__link <?php if ($tab == 'about') : echo 'active';
													endif; ?>" href="/home/about">About Us</a>
					<a class="nav-link nav__link <?php if ($tab == 'projects') : echo 'active';
													endif; ?>" href="/home/projects">Projects</a>
					<a class="nav-link nav__link <?php if ($tab == 'contact') : echo 'active';
													endif; ?>" href="/home/contact">Contact</a>
					<a class="nav-link nav__link <?php if ($tab == 'faq') : echo 'active';
													endif; ?>" href="/home/faq">FAQ</a>
				</div> <!-- end navbar nav -->
			</div> <!-- end navbar -->
		</div> <!-- end container fluid -->

		<!-- navigation tablet-mobile view -->
		<div id="navbar-mini" class="navbar__mini">
			<div class="nav__mini">
				<!-- head -->
				<div class="navbarmini__head">
					<img src="/mainpage/img/skyx-logo.svg" alt="...">
					<div id="navmini-close" class="navmini__close"><i class="ai-cross"></i></div>
				</div>

				<!-- main -->
				<a class="navmini__link <?php if ($tab == 'home') : echo 'active';
										endif; ?>" href="/home/home">Home</a>
				<a class="navmini__link <?php if ($tab == 'about') : echo 'active';
										endif; ?>" href="/home/about">About Us</a>
				<a class="navmini__link <?php if ($tab == 'projects') : echo 'active';
										endif; ?>" href="/home/projects">Projects</a>
				<a class="navmini__link <?php if ($tab == 'contact') : echo 'active';
										endif; ?>" href="/home/contact">Contact</a>
				<a class="navmini__link <?php if ($tab == 'faq') : echo 'active';
										endif; ?>" href="/home/faq">FAQ<a>

						<!-- foot -->
						<div class="navbarmini__foot text-center pt-4">
							<div style="font-size: 14px;" class="txt__second">"One stop solutions for blockchain projects investments."</div>
						</div>
			</div> <!-- end nav mini -->
		</div> <!-- end navbar mini -->
	</nav> <!-- end nav -->
	<!-- end navigation section -->

	<!-- scroll up button -->
	<i class="bi bi-caret-up-fill scroll__up"></i>
	<!-- end scroll up button -->

	<!-- jumbotron section -->
	<div class="overflow-hidden">
		<div class="jumbotron sec__x">
			<div class="container">
				<div class="row">
					<!-- left -->
					<div class="col-lg-7 col-12 left">
						<h1>SKYX VENTURES CAPITAL</h1>
						<p class="txt__second">One stop solutions for blockchain projects investments</p>
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

	<!-- footer section -->
	<footer class="sec__y">
		<div class="sec__x">
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- left -->
					<div class="foot__l col-md-6 col-12">
						<!-- foot description -->
						<div class="foot__desc">
							<!-- <img src="/mainpage/img/skyx-logo.svg" alt="skyx-logo"> -->
							<a href="/home/home" class="d-block"><img src="/mainpage/img/logo-skyx-word.svg" alt="skyx-logo"></a>
							<p>One stop solutions for blockchain projects investments</p>
						</div>

						<!-- foot contact -->
						<div class="foot__contact">
							<a href="#" class="fc__link">
								<i class="fas fa-phone-alt d-flex align-items-center"></i>
								<span class="d-block">+62 823 9023 0499</span>
							</a>
							<a href="mailto:info@skyx.fund" target="_blank" class="fc__link">
								<i class="fas fa-envelope d-flex align-items-center"></i>
								<span class="d-block">info@skyx.fund</span>
							</a>
							<a href="#" class="fc__link">
								<i class="fas fa-map-marked-alt d-flex align-items-center"></i>
								<span class="d-block">10528 Conrad Dr, Jacksonville, FL, 32218</span>
							</a>
						</div>

						<!-- foot social media icon -->
						<div class="foot__icon">
							<a href="https://www.instagram.com/skyx.fund/" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="https://twitter.com/skyx_fund" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="https://t.me/skyx_community" target="_blank"><i class="fab fa-telegram-plane"></i></a>
						</div>
					</div>

					<!-- right -->
					<div class="foot__r col-md-6 col-12">
						<div class="d-flex justify-content-end">
							<ul class="foot__list">
								<li class="foot__link fw-bold">Quick Links</li>
								<li class="foot__link"><a class="d-flex align-items-center" href="/home/home"><span class="d-block me-2">Home</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
								<li class="foot__link"><a class="d-flex align-items-center" href="/home/faq"><span class="d-block me-2">FAQs</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
							</ul>
							<ul class="foot__list">
								<li class="foot__link fw-bold">Company</li>
								<li class="foot__link"><a class="d-flex align-items-center" href="/home/project"><span class="d-block me-2">Projects</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
								<li class="foot__link"><a class="d-flex align-items-center" href="/home/about"><span class="d-block me-2">About Us</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
								<li class="foot__link"><a class="d-flex align-items-center" href="/home/contact"><span class="d-block me-2">Contact Us</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
							</ul>
						</div>
					</div>
				</div> <!-- end row -->

				<!-- foot -->
				<div class="foot d-flex align-items-center justify-content-between">
					<hr>
					<div class="txt__second">© 2021 Copyright. All right reserved</div>
				</div> <!-- end foot -->
			</div> <!-- end container -->
		</div> <!-- section x -->
	</footer>
	<!-- end footer section -->

	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery 3.5.1 Gcdn scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!-- bootstrap scripts -->
	<script src="/mainpage/js/owl.carousel.min.js"></script> <!-- owl carousel min scripts -->

	<script src="/mainpage/js/scripts.js"></script> <!-- skyx scripts -->

	<!-- carousel-info-home -->
	<script>
		$(document).ready(function() {
			$('.owl-carousel#info').owlCarousel({
				loop: true,
				margin: 16,
				nav: false,
				dots: true,
				autoplay: true,
				autoplayTimeout: 6000,
				smartSpeed: 1000,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 1
					},
					1000: {
						items: 1
					}
				}
			});
		});
	</script>
</body>

</html>