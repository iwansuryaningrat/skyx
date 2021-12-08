<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<!-- Main Panel -->
<div class="main-panel">
	<div class="container">
		<div class="page-inner">
			<h4 class="page-title">Frequently Asked Questions</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="card card-space">
						<div class="card-header">
							<h4 class="card-title">FAQ</h4>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-12 col-md-12">
									<div class="tab-content" id="v-pills-tabContent">
										<div class="tab-pane fade active show" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
											<div class="accordion accordion-secondary">
												<div class="card">
													<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" role="button">
														<div class="span-icon">
															<div class="flaticon-box-1"></div>
														</div>
														<div class="span-title">
															Skyx Token
														</div>
														<div class="span-mode"></div>
													</div>

													<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
														<div class="card-body">
															SKX merupakan token collateral milik SKYX. Dengan memiliki SKX, Anda akan mendapatkan garansi alokasi <b> private sale dari berbagai macam proyek berkualitas.</b>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
														<div class="span-icon">
															<div class="flaticon-box-1"></div>
														</div>
														<div class="span-title">
															BENEFITS FOR SKX HOLDERS
														</div>
														<div class="span-mode"></div>
													</div>
													<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
														<div class="card-body">
															<ol>
																<li>Garansi alokasi ICO dengan harga private sale, <b>bottom price</b></li>
																<li>Screening berlapis untuk mendapatkan <b>project terbaik</b></li>
																<li>Harga SKX fixed 1$, <b>harga stabil dan redeemable to BUSD</b></li>
															</ol>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" role="button">
														<div class="span-icon">
															<div class="flaticon-box-1"></div>
														</div>
														<div class="span-title">
															Tahapan :
														</div>
														<div class="span-mode"></div>
													</div>
													<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
														<div class="card-body">
															<ol>
																<li>Tukar BUSD dengan SKX token dengan harga tetap 1 SKX = 1 BUSD</li>
																<li>SKX holder akan mendapatkan privilege harga awal projek – projek baru, bahkan harga private sale (lebih murah dari public sale)</li>
																<li>SKX holder dapet membeli maksimum alokasi yang didapat sesuai dengan bobot yang dimiliki</li>
																<li>Private sale akan dibagikan tepat waktu sesuai dengan timeline projek </li>
																<li>Token langsung dikirimkan ke wallet SKX holder </li>
															</ol>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
														<div class="span-icon">
															<div class="flaticon-box-1"></div>
														</div>
														<div class="span-title">
															POOL WEIGHT :
														</div>
														<div class="span-mode"></div>
													</div>
													<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
														<div class="card-body">
															<b>1 SKX = 1 BUSD</b>
															<p>
															<ul>
																<li>Tier 1 : 2500 SKX min alokasi bobot 1</li>
																<li>Tier 2 : 5000 SKX min alokasi bobot 2.5</li>
																<li>Tier 3 : 10.000 SKX min alokasi bobot 6</li>
																<li>Tier 4 : 25.000 SKX min alokasi bobot 18 - (limited for 4 holders)</li>
															</ul>
															</p>
															<p><span>*</span>SKX token redeemable after 3 months <br><span>*</span>SKX token tidak untuk diperjualbelikan, dan hanya bisa redeem dari wallet awal investor </p>
															<p></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container-fluid">
				<nav class="pull-left">
					<ul class="nav">
						<li class="nav-item">

						</li>
						<li class="nav-item">

						</li>
						<li class="nav-item">

						</li>
					</ul>
				</nav>
				<div class="copyright ml-auto">
					Skyx © 2021 Copyright. All right reserved
				</div>
			</div>
		</footer>
	</div>
</div>

<?= $this->endSection(); ?>