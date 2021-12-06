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
							SKX merupakan token collateral milik SKYX. Dengan memiliki SKX, Anda akan mendapatkan garansi alokasi <b> private sale dari berbagai macam proyek berkualitas.</b>
						</p>
					</div>
				</div>
			</div>
			<!-- end qbox1 -->

			<!-- qbox2 -->
			<div class="qbox">
				<a class="qbox__link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#qbox-2" role="button" aria-expanded="false" aria-controls="collapseExample">
					<span>BENEFITS FOR SKX HOLDERS</span>
					<i class="bi bi-caret-down-fill ms-3 qbox__transform"></i>
				</a>

				<div class="collapse" id="qbox-2">
					<div class="qbox__collapse">
						<p class="txt__desc">
						<ol class="txt__desc">
							<li>Garansi alokasi ICO dengan harga private sale, <b>bottom price</b></li>
							<li>Screening berlapis untuk mendapatkan <b>project terbaik</b></li>
							<li>Harga SKX fixed 1$, <b>harga stabil dan redeemable to BUSD</b></li>
						</ol>
						</p>
					</div>
				</div>
			</div>
			<!-- end qbox2 -->

			<!-- qbox3 -->
			<div class="qbox">
				<a class="qbox__link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#qbox-3" role="button" aria-expanded="false" aria-controls="collapseExample">
					<span>POOL WEIGHT</span>
					<i class="bi bi-caret-down-fill ms-3 qbox__transform"></i>
				</a>

				<div class="collapse" id="qbox-3">
					<div class="qbox__collapse">
						<p class="txt__desc">
							<b>1 SKX = 1 BUSD</b>
						<ul class="txt__desc">
							<li>Tier 1 : 2500 SKX min alokasi bobot 1</li>
							<li>Tier 2 : 5000 SKX min alokasi bobot 2.5</li>
							<li>Tier 3 : 10.000 SKX min alokasi bobot 6</li>
							<li>Tier 4 : 25.000 SKX min alokasi bobot 18 - (limited for 4 holders)</li>
						</ul>
						<p class="txt__desc"><span>*</span>SKX token redeemable after 3 months <br><span>*</span>SKX token tidak untuk diperjualbelikan, dan hanya bisa redeem dari wallet awal investor </p>
						</p>
					</div>
				</div>
			</div>
			<!-- end qbox3 -->

			<!-- qbox4 -->
			<div class="qbox">
				<a class="qbox__link d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#qbox-4" role="button" aria-expanded="false" aria-controls="collapseExample">
					<span>Tahapan</span>
					<i class="bi bi-caret-down-fill ms-3 qbox__transform"></i>
				</a>

				<div class="collapse" id="qbox-4">
					<div class="qbox__collapse">
						<p class="txt__desc">
						<ol class="txt__desc">
							<li>Tukar BUSD dengan SKX token dengan harga tetap 1 SKX = 1 BUSD</li>
							<li>SKX holder akan mendapatkan privilege harga awal projek – projek baru, bahkan harga private sale (lebih murah dari public sale)</li>
							<li>SKX holder dapet membeli maksimum alokasi yang didapat sesuai dengan bobot yang dimiliki</li>
							<li>Private sale akan dibagikan tepat waktu sesuai dengan timeline projek </li>
							<li>Token langsung dikirimkan ke wallet SKX holder </li>
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