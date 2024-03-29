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
    <link rel="apple-touch-icon" sizes="57x57" href="/mainpage/img/icon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/mainpage/img/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/mainpage/img/icon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/mainpage/img/icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/mainpage/img/icon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/mainpage/img/icon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/mainpage/img/icon/apple-touch-icon-180x180.png">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!-- bootstrap styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" integrity="sha512-xnP2tOaCJnzp2d2IqKFcxuOiVCbuessxM6wuiolT9eeEJCyy0Vhcwa4zQvdrZNVqlqaxXhHqsSV1Ww7T2jSCUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- bootstrap icon -->
    <link rel="stylesheet" href="/mainpage/css/owl.carousel.min.css"> <!-- owl carousel min -->
    <link rel="stylesheet" href="/mainpage/css/owl.theme.default.min.css"> <!-- owl carousel theme default min -->
    <link rel="stylesheet" href="/mainpage/vendor/fontawesome-free-5.15.3-web/css/all.min.css"> <!-- fontawesome free v.5.15 -->
    <link rel="stylesheet" href="/mainpage/vendor/akar-icons-fonts-main/src/css/akar-icons.css"> <!-- akar icon styles -->
    <link rel="stylesheet" href="/mainpage/vendor/uicons-bold-rounded/css/uicons-bold-rounded.css"> <!-- flat icon bold rounded icon styles -->

    <link rel="stylesheet" href="/mainpage/css/styles.css"> <!-- skyx styles -->

    <!-- Favicon  -->
    <link rel="icon" href="/mainpage/img/icon/favicon.ico">
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
                    <div class="position-relative">
                        <a class="nav-link nav__link <?php if ($tab == 'projects') : echo 'active';
                                                        endif; ?>" href="/home/projects">Projects</a>
                        <div class="nav__dropdown">
                            <a class="nav-link nav__link" href="/home/portfolio">Portfolio</a>
                            <a class="nav-link nav__link" href="/home/partnership">Partnership</a>
                        </div>
                    </div>
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
                <!-- project nav -->
                <div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a class="navmini__link m-0 <?php if ($tab == 'projects') : echo 'active';
                                                    endif; ?>" href="/home/projects">Projects</a>
                        <a class="navmini__icon" data-bs-toggle="collapse" href="#navminicollapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-caret-down-fill ms-3 qbox__transform"></i>
                        </a>
                    </div>

                    <div class="collapse" id="navminicollapse">
                        <div class="pt-3">
                            <a class="navmini__link p__link" href="/home/portfolio">Portfolio</a>
                            <a class="navmini__link p__link" href="/home/partnership">Partnership</a>
                        </div>
                    </div>
                </div>
                <!-- end project nav -->
                <a class="navmini__link <?php if ($tab == 'contact') : echo 'active';
                                        endif; ?>" href="/home/contact">Contact</a>
                <a class="navmini__link <?php if ($tab == 'faq') : echo 'active';
                                        endif; ?>" href="/home/faq">FAQ</a>

                <!-- foot -->
                <div class="navbarmini__foot text-center pt-4">
                    <div style="font-size: 14px;" class="txt__second">"One-stop solutions for blockchain project investments."</div>
                </div>
            </div> <!-- end nav mini -->
        </div> <!-- end navbar mini -->
    </nav> <!-- end nav -->
    <!-- end navigation section -->

    <!-- scroll up button -->
    <i class="bi bi-caret-up-fill scroll__up"></i>
    <!-- end scroll up button -->

    <!-- Music Background -->
    <audio hidden autoplay loop>
        <source src="/music/background_music.mp3" type="audio/mpeg">
    </audio>


    <?= $this->renderSection('mainpage'); ?>


    <!-- footer section -->
    <footer class=" sec__y">
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
                            <p>One-stop Solutions For Blockchain Project Investments</p>
                        </div>

                        <!-- foot contact -->
                        <div class="foot__contact">
                            <!-- <a href="#" class="fc__link">
								<i class="fas fa-phone-alt d-flex align-items-center"></i>
								<span class="d-block">+62 823 9023 0499</span>
							</a> -->
                            <a href="mailto:info@skyx.fund" target="_blank" class="fc__link">
                                <i class="fas fa-envelope d-flex align-items-center"></i>
                                <span class="d-block">info@skyx.fund</span>
                            </a>
                            <!-- <a href="#" class="fc__link">
								<i class="fas fa-map-marked-alt d-flex align-items-center"></i>
								<span class="d-block">10528 Conrad Dr, Jacksonville, FL, 32218</span>
							</a> -->
                        </div>

                        <!-- foot social media icon -->
                        <div class="foot__icon">
                            <a href="https://www.instagram.com/skyx.fund/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/skyx_fund" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://t.me/skyx_community" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                            <a href="https://t.me/skyx_announcement" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                            <a href="https://www.linkedin.com/company/skyxfund" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <!-- right -->
                    <div class="foot__r col-md-6 col-12">
                        <div class="d-flex justify-content-end">
                            <ul class="foot__list">
                                <li class="foot__link fw-bold">Quick Links</li>
                                <li class="foot__link"><a class="d-flex align-items-center" href="/home/home"><span class="d-block me-2">Home</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
                                <li class="foot__link"><a class="d-flex align-items-center" href="/home/faq"><span class="d-block me-2">FAQs</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
                                <li class="foot__link"><a class="d-flex align-items-center" href="/home/contact"><span class="d-block me-2">Contact Us</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
                            </ul>
                            <ul class="foot__list">
                                <li class="foot__link fw-bold">Company</li>
                                <li class="foot__link"><a class="d-flex align-items-center" href="/home/projects"><span class="d-block me-2">Projects</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
                                <li class="foot__link"><a class="d-flex align-items-center" href="/home/portfolio"><span class="d-block me-2">Portfolio</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
                                <li class="foot__link"><a class="d-flex align-items-center" href="/home/partnership"><span class="d-block me-2">Partnership</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
                                <li class="foot__link"><a class="d-flex align-items-center" href="/home/about"><span class="d-block me-2">About Us</span><i class="ai-arrow-up-right d-flex align-items-center"></i></a></li>
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

    <?php if ($tab == 'contact') : ?>
        <script>
            inputElement1 = document.getElementById('pitchdeck')
            labelElement1 = document.getElementById('pitchdeckname')
            inputElement1.onchange = function(event) {
                var path = inputElement1.value;
                if (path) {
                    labelElement1.innerHTML = path.split(/(\\|\/)/g).pop()
                } else {
                    labelElement1.innerHTML = ' Upload Pitchdeck'
                }
            }

            inputElement2 = document.getElementById('whitepaper')
            labelElement2 = document.getElementById('whitepapername')
            inputElement2.onchange = function(event) {
                var path = inputElement2.value;
                if (path) {
                    labelElement2.innerHTML = path.split(/(\\|\/)/g).pop()
                } else {
                    labelElement2.innerHTML = ' Upload Whitepaper'
                }
            }
        </script>
    <?php endif; ?>

</body>

</html>