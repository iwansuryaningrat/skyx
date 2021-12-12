<?= $this->extend('mainpage/template/layout'); ?>

<?= $this->section('mainpage'); ?>

<!-- header -->
<header>
    <div class="container">
        <div class="head__other d-flex justify-content-center align-items-center">
            <div class="header__main">
                <h1>Projects</h1>
                <p class="txt__second">We have a very extraordinary project for our potential investors, all of which we do by doing research with our professional team.</p>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- level project section -->
<div class="sec__x sec__y">
    <div class="container">
        <div class="prjct__lvl">
            <h2 class="title__info text-center">Tier Level</h2>

            <div class="row">
                <!-- tier1 -->
                <div class="col-lg-3 col-md-6 col-12 px-4 py-lg-0 py-md-4 py-3">
                    <a href="#" class="prjct__link">
                        <p class="text-center fw-bold">TIER 1</p>
                        <div class="prjct__card">
                            <div class="prjct__content">
                                <p class="prjct__point">2500 SKX</p>
                                <p class="mb-0">1 POOL WEIGHT</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end tier1 -->

                <!-- tier2 -->
                <div class="col-lg-3 col-md-6 col-12 px-4 px-4 py-lg-0 py-md-4 py-3">
                    <a href="#" class="prjct__link">
                        <p class="text-center fw-bold">TIER 2</p>
                        <div class="prjct__card">
                            <div class="prjct__content">
                                <p class="prjct__point">5000 SKX</p>
                                <p class="mb-0">2.5 POOL WEIGHT</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end tier2 -->

                <!-- tier3 -->
                <div class="col-lg-3 col-md-6 col-12 px-4 px-4 py-lg-0 py-md-4 py-3">
                    <a href="#" class="prjct__link">
                        <p class="text-center fw-bold">TIER 3</p>
                        <div class="prjct__card">
                            <div class="prjct__content">
                                <p class="prjct__point">10000 SKX</p>
                                <p class="mb-0">6 POOL WEIGHT</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end tier3 -->

                <!-- tier4 -->
                <div class="col-lg-3 col-md-6 col-12 px-4 px-4 py-lg-0 py-md-4 py-3">
                    <a href="#" class="prjct__link">
                        <p class="text-center fw-bold">TIER 4</p>
                        <div class="prjct__card">
                            <div class="prjct__content">
                                <p class="prjct__point">25000 SKX</p>
                                <p class="mb-0">18 POOL WEIGHT</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end tier4 -->
            </div> <!-- end row -->
        </div>
    </div> <!-- end container -->
</div>
<!-- level project section -->

<!-- step project section -->
<div class="sec__x sec__y">
    <div class="container">
        <div class="prjct__step">
            <h2 class="title__info text-center">Project Stage</h2>
            <div id="step-project" class="owl-carousel owl-theme">
                <div>
                    <div class="ps__card">
                        <div class="ps__img">
                            <img src="/mainpage/img/icon-step-5.png" alt="...">
                        </div>
                        <div class="ps__progress">
                            <div class="ps__progress2">
                                <div class="ps__progress3"></div>
                            </div>
                        </div>
                        <div class="ps__desc">
                            <p class="fw-bold">Step 1</p>
                            <p>Exchange BUSD for SKX tokens at a fixed price 1 SKX = 1 BUSD</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="ps__card">
                        <div class="ps__img">
                            <img src="/mainpage/img/icon-step-2.png" alt="...">
                        </div>
                        <div class="ps__progress">
                            <div class="ps__progress2">
                                <div class="ps__progress3"></div>
                            </div>
                        </div>
                        <div class="ps__desc">
                            <p class="fw-bold">Step 2</p>
                            <p>SKX holders will get the privilege of starting prices for new projects, even private sales prices (cheaper than public sales)</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="ps__card">
                        <div class="ps__img">
                            <img src="/mainpage/img/icon-step-4.png" alt="...">
                        </div>
                        <div class="ps__progress">
                            <div class="ps__progress2">
                                <div class="ps__progress3"></div>
                            </div>
                        </div>
                        <div class="ps__desc">
                            <p class="fw-bold">Step 3</p>
                            <p>SKX holders can buy the maximum allocation they get according to their weight</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="ps__card">
                        <div class="ps__img">
                            <img src="/mainpage/img/icon-step-3.png" alt="...">
                        </div>
                        <div class="ps__progress">
                            <div class="ps__progress2">
                                <div class="ps__progress3"></div>
                            </div>
                        </div>
                        <div class="ps__desc">
                            <p class="fw-bold">Step 4</p>
                            <p>The private sale will be distributed on time according to the project timeline</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="ps__card">
                        <div class="ps__img">
                            <img src="/mainpage/img/icon-step-1.png" alt="...">
                        </div>
                        <div class="ps__progress">
                            <div class="ps__progress2">
                                <div class="ps__progress3"></div>
                            </div>
                        </div>
                        <div class="ps__desc">
                            <p class="fw-bold">Step 5</p>
                            <p>Tokens are sent directly to the SKX holder's wallet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</div>
<!-- step project section -->

<?= $this->endSection(); ?>