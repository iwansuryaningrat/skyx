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
			<!-- qbox1 -->
			<div class="qbox">
				<a class="qbox__link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#qbox-1" role="button" aria-expanded="false" aria-controls="collapseExample">
					<span>Skyx Token</span>
					<i class="bi bi-caret-down-fill ms-3 qbox__transform"></i>
				</a>

				<div class="collapse" id="qbox-1">
					<div class="qbox__collapse">
						<p class="txt__desc">
							SKX is SKYX's collateral token. By having SKX, you will get a guaranteed private sale allocation of various quality projects.
						</p>
					</div>
				</div>
			</div>
			<!-- end qbox1 -->

			<!-- qbox2 -->
			<div class="qbox">
				<a class="qbox__link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#qbox-2" role="button" aria-expanded="false" aria-controls="collapseExample">
					<span>Benefits For SKX Holders</span>
					<i class="bi bi-caret-down-fill ms-3 qbox__transform"></i>
				</a>

				<div class="collapse" id="qbox-2">
					<div class="qbox__collapse">
						<p class="txt__desc">
						<ol class="txt__desc">
							<li>Guaranteed ICO allocation with private sale price, bottom price</b></li>
							<li>Layered screening to get the best project</b></li>
							<li>SKX price fixed 1$, stable price and redeemable to BUSD</li>
						</ol>
						</p>
					</div>
				</div>
			</div>
			<!-- end qbox2 -->

			<!-- qbox3 -->
			<div class="qbox">
				<a class="qbox__link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#qbox-3" role="button" aria-expanded="false" aria-controls="collapseExample">
					<span>Pool Weight</span>
					<i class="bi bi-caret-down-fill ms-3 qbox__transform"></i>
				</a>

				<div class="collapse" id="qbox-3">
					<div class="qbox__collapse">
						<p class="txt__desc">
							<b>1 SKX = 1 BUSD</b>
						<ul class="txt__desc">
							<li>Tier 1: 2500 SKX min weight allocation 1</li>
							<li>Tier 2 : 5000 SKX min weight allocation 2.5</li>
							<li>Tier 3: 10,000 SKX min weight allocation 6</li>
							<li>Tier 4: 25,000 SKX min weight allocation 18 - (limited for 4 holders)</li>
						</ul>
						<p class="txt__desc"><span>*</span>SKX tokens redeemable after 3 months<br><span>*</span>SKX tokens are not for sale, and can only be redeemed from investors' initial wallets
						</p>
						</p>
					</div>
				</div>
			</div>
			<!-- end qbox3 -->

			<!-- qbox4 -->
			<div class="qbox">
				<a class="qbox__link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#qbox-4" role="button" aria-expanded="false" aria-controls="collapseExample">
					<span>Stage</span>
					<i class="bi bi-caret-down-fill ms-3 qbox__transform"></i>
				</a>

				<div class="collapse" id="qbox-4">
					<div class="qbox__collapse">
						<p class="txt__desc">
						<ol class="txt__desc">
							<li>Exchange BUSD for SKX tokens at a fixed price 1 SKX = 1 BUSD</li>
							<li>SKX holders will get the privilege of starting prices for new projects, even private sales prices (cheaper than public sales)</li>
							<li>SKX holders can buy the maximum allocation they get according to their weight</li>
							<li>The private sale will be distributed on time according to the project timeline</li>
							<li>Tokens are sent directly to the SKX holder's wallet</li>
						</ol>
						</p>
					</div>
				</div>
			</div>
			<!-- end qbox4 -->
		</div>
	</div> <!-- end container -->
</div>
<!-- end faq section -->

<?= $this->endSection(); ?>