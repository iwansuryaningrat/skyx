<?= $this->extend('mainpage/template/layout'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<header>
	<div class="container">
		<div class="head__other d-flex justify-content-center align-items-center">
			<div class="header__main">
				<h1>About us</h1>
				<p class="txt__second">SKYX is a growing Venture Capital aiming to provide opportunities for investors who want to invest in crypto projects. We aim to provide access to our clients. Thus they can beneficially invest in selected projects that we have thoroughly researched, which we see as good prospects and potential.</p>
			</div>
		</div>
	</div>
</header>
<!-- end header -->

<!-- visi misi section -->
<div class="sec__x sec__y">
	<div class="container">
		<!-- visi -->
		<div class="row visi">
			<!-- left -->
			<div class="col-lg-6 col-12 ">
				<div class="v__left">
					<h2 class="title__info">Vision</h2>
					<p class="txt__second">One-stop solutions for blockchain project investments</p>
				</div>
			</div>

			<!-- right -->
			<div class="col-lg-6 col-12">
				<div class="v__right">
					<div class="v__img bg__img" style="background-image: url(/mainpage/img/visi-img.png);"></div>
				</div>
			</div>
		</div>
		<!-- end visi -->

		<div class="misi">
			<div>
				<h2 class="text-center title__info">Mission</h2>
			</div>
			<div>
				<div class="row">
					<!-- misi 1 -->
					<div class="col-lg-3 col-md-6 col-12 m__pb">
						<div class="m__card">
							<div class="d-flex align-items-center">
								<div class="m__icon">
									<i class="fi fi-br-paper-plane"></i>
								</div>
							</div>
							<p>Providing the fastest and most trusted information related to the world of blockchain.</p>
						</div> <!-- end misi card -->
					</div>

					<!-- misi 2 -->
					<div class="col-lg-3 col-md-6 col-12 m__pb">
						<div class="m__card">
							<div class="d-flex align-items-center">
								<div class="m__icon">
									<i class="fi fi-br-life-ring"></i>
								</div>
							</div>
							<p>Providing convenience to investors in investing in the blockchain world.</p>
						</div> <!-- end misi card -->
					</div>

					<!-- misi 3 -->
					<div class="col-lg-3 col-md-6 col-12 m__pb">
						<div class="m__card">
							<div class="d-flex align-items-center">
								<div class="m__icon">
									<i class="fi fi-br-diamond"></i>
								</div>
							</div>
							<p>Researching projects with SKYX high standards.</p>
						</div> <!-- end misi card -->
					</div>

					<!-- misi 4 -->
					<div class="col-lg-3 col-md-6 col-12 m__pb">
						<div class="m__card">
							<div class="d-flex align-items-center">
								<div class="m__icon">
									<i class="fi fi-br-shield-check"></i>
								</div>
							</div>
							<p>Mitigating the risk of investment fraud.</p>
						</div> <!-- end misi card -->
					</div>
				</div> <!-- end row -->
			</div>
		</div>
	</div> <!-- end container -->
</div>
<!-- end visi misi section -->

<!-- our team section -->
<div class="sec__x sec__y">
	<div class="container">
		<div class="mteam__section">
			<!-- mteam head -->
			<div class="mteam__head">
				<h2 class="title__info">Meet our team</h2>
				<p class="txt__second">We are OG in cryptocurrency and believe that blockchain is the future, our team consist of Bitcoin 101 Author, Ex-Big Four, Ex-Tokopedia (Biggest e-Commerce in Indonesia), Crypto Influencer and Educator, Stocks Analyst, Ex-Banker, and Network Engineer.</p>
			</div> <!-- end mteam head -->

			<!-- mteam flex -->
			<div class="mteam__flex">
				<?php foreach ($teams as $row) : ?>
					<div class="mteam">
						<div class="mteam__img bg__img" style="background-image: url(/foto/teams/<?= $row['foto']; ?>);"></div>
						<div class="mteam__name">
							<p class="fw-bold"><?= $row['nama']; ?></p>
						</div>
						<div class="mteam__jd">
							<p class="txt__desc fw-bold"><?= $row['jabatan']; ?></p>
						</div>
						<div class="mteam__icon">
							<a href="<?php if ($row['ig'] != null) : echo $row['ig'];
										else : echo '#';
										endif; ?>" target="_blank"><i class="fab fa-instagram-square"></i></a>
							<a href="<?php if ($row['linkedin'] != null) : echo $row['linkedin'];
										else : echo '#';
										endif; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
						</div>
					</div>
				<?php endforeach; ?>
			</div> <!-- end mteam flex -->
		</div> <!-- end mteam section -->
	</div> <!-- end container -->
</div>
<!-- end our team section -->

<?= $this->endSection(); ?>