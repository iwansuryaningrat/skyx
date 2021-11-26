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
	<link rel="icon" href="">
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
					<a class="nav-link nav__link <?php if ($tab == 'home') : echo 'active" aria-current="page" ';
													endif; ?> href=" /home/home">Home</a>
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
						<h1>The Best Initial Coin Offering Platform in Indonesia.</h1>
						<p class="txt__second">Lorem ipsum dolor sit amet, consectetur adipiscing elit. A tortor enim tempus eget.</p>
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
							<!-- info 1 -->
							<div class="pe-3">
								<div class="card__info">
									<h2 class="title__info">Cryptocurrency ICO</h2>
									<p class="txt__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id sagittis a neque blandit neque bibendum id neque aenean. Commodo aenean velit molestie sit laoreet nulla in faucibus sed. Hendrerit amet odio dolor morbi id orci eu cursus.</p>
									<div class="btn__lm">
										<a href="#" class="d-flex align-items-center"><span class="d-flex">Learn more</span><i class="bi bi-arrow-right-short d-flex align-items-center"></i></a>
									</div>
								</div>
							</div>

							<!-- info 2 -->
							<div class="pe-3">
								<div class="card__info">
									<h2 class="title__info">How to invest in bitcoin</h2>
									<p class="txt__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam odio deleniti sit! Ratione commodi debitis incidunt temporibus vel fugit doloremque porro eligendi, dolorem veritatis optio unde dignissimos assumenda tempora molestias!</p>
									<div class="btn__lm">
										<a href="#" class="d-flex align-items-center"><span class="d-flex">Learn more</span><i class="bi bi-arrow-right-short d-flex align-items-center"></i></a>
									</div>
								</div>
							</div>

							<!-- info 3 -->
							<div class="pe-3">
								<div class="card__info">
									<h2 class="title__info">Comfort with SKX holder</h2>
									<p class="txt__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id sagittis a neque blandit neque bibendum id neque aenean, commodo.</p>
									<div class="btn__lm">
										<a href="#" class="d-flex align-items-center"><span class="d-flex">Learn more</span><i class="bi bi-arrow-right-short d-flex align-items-center"></i></a>
									</div>
								</div>
							</div>

							<!-- info 4 -->
							<div class="pe-3">
								<div class="card__info">
									<h2 class="title__info">October Codefest is here!</h2>
									<p class="txt__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id sagittis a neque blandit neque bibendum id neque aenean. Commodo aenean velit molestie sit laoreet nulla in faucibus sed.</p>
									<div class="btn__lm">
										<a href="#" class="d-flex align-items-center"><span class="d-flex">Learn more</span><i class="bi bi-arrow-right-short d-flex align-items-center"></i></a>
									</div>
								</div>
							</div>
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
							<img src="/mainpage/img/skyx-logo.svg" alt="skyx-logo">
							<p>Making it easy to get blockchain/crypto project allocation along with investor security by professional practitioners.</p>
						</div>

						<!-- foot contact -->
						<div class="foot__contact">
							<p>+62 823 9023 0499</p>
							<p>info@skyx.fund</p>
							<p> 10528 Conrad Dr, Jacksonville, FL, 32218</p>
						</div>

						<!-- foot social media icon -->
						<div class="foot__icon">
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-telegram-plane"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>

					<!-- right -->
					<div class="foot__r col-md-6 col-12">
						<div class="d-flex justify-content-end">
							<ul class="foot__list">
								<li class="foot__link fw-bold">Quick Links</li>
								<li class="foot__link"><a class="d-flex align-items-center" href="/home/home"><span class="d-block me-2">Home</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
								<li class="foot__link"><a class="d-flex align-items-center" href="faq.html"><span class="d-block me-2">FAQs</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
							</ul>
							<ul class="foot__list">
								<li class="foot__link fw-bold">Company</li>
								<li class="foot__link"><a class="d-flex align-items-center" href="project.html"><span class="d-block me-2">Projects</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
								<li class="foot__link"><a class="d-flex align-items-center" href="about.html"><span class="d-block me-2">About Us</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
								<li class="foot__link"><a class="d-flex align-items-center" href="contact.html"><span class="d-block me-2">Contact Us</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
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
</body>

</html>