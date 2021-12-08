<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="/mainpage/img/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="/admin/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['/admin/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/assets/css/atlantis.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="/admin/assets/css/demo.css">

    <style>
        .logo-header a {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-header a img {
            /* width: 100%; */
            height: 48px;
            /* margin: auto; */
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                <a href="/admin/index" class="logo">
                    <img src="/admin/assets/img/skyx-logo.svg" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                <div class="container-fluid">
                    <!-- Search -->
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <!-- Profile -->
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="/admin/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="/admin/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4><?= $admin['username']; ?></h4>
                                                <p class="text-muted"><?= $admin['email']; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/logout">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <!-- User -->
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="/admin/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <?= $admin['username']; ?>
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/logout">
                                            <span class="link-collapse">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <!-- Dashboard -->
                        <li class="nav-item <?php if ($tab == "dashboard") echo "active"; ?>">
                            <a href="/admin/index">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <!-- Users -->
                        <li class="nav-item <?php if ($tab == "users") echo "active"; ?>">
                            <a href="/admin/users">
                                <i class="fas fa-users"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <!-- Teams -->
                        <li class="nav-item <?php if ($tab == "teams") echo "active"; ?>">
                            <a href="/admin/teams">
                                <i class="fas fa-id-card"></i>
                                <p>Teams</p>
                            </a>
                        </li>
                        <!-- Partnership -->
                        <li class="nav-item <?php if ($tab == "partnership") echo "active"; ?>">
                            <a href="/admin/partnership">
                                <i class="fas fa-handshake"></i>
                                <p>Partnership</p>
                            </a>
                        </li>
                        <!-- Portfolio -->
                        <li class="nav-item <?php if ($tab == "portfolio") echo "active"; ?>">
                            <a href="/admin/portfolio">
                                <i class="fas fa-folder-open"></i>
                                <p>Portfolio</p>
                            </a>
                        </li>
                        <!-- Projects -->
                        <li class="nav-item <?php if ($tab == "projects") echo "active"; ?>">
                            <a href="/admin/projects">
                                <i class="fas fa-file-signature"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <!-- Articles -->
                        <li class="nav-item <?php if ($tab == "artikel") echo "active"; ?>">
                            <a href="/admin/artikel">
                                <i class="fas fa-newspaper"></i>
                                <p>Artikel</p>
                            </a>
                        </li>
                        <!-- Faqs -->
                        <li class="nav-item <?php if ($tab == "faqs") echo "active"; ?>">
                            <a href="/admin/faqs">
                                <i class="far fa-question-circle"></i>
                                <p>Faqs</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <?= $this->renderSection('admin'); ?>

    </div>

    <!--   Core JS Files   -->
    <script src="/admin/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="/admin/assets/js/core/popper.min.js"></script>
    <script src="/admin/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="/admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="/admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="/admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="/admin/assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="/admin/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="/admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="/admin/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="/admin/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="/admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="/admin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="/admin/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="/admin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="/admin/assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="/admin/assets/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="/admin/assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="/admin/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="/admin/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Wizard -->
    <script src="/admin/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="/admin/assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="/admin/assets/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="/admin/assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="/admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Owl Carousel -->
    <script src="/admin/assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

    <!-- Magnific Popup -->
    <script src="/admin/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Atlantis JS -->
    <script src="/admin/assets/js/atlantis.min.js"></script>

    <!-- Circle Chart Script -->
    <script>
        Circles.create({
            id: 'new-subscribers',
            radius: 45,
            value: <?= $newSubscribers; ?>,
            maxValue: 10000,
            width: 7,
            text: <?= $newSubscribers; ?>,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'today-visitors',
            radius: 45,
            value: <?= $visitors; ?>,
            maxValue: 10000,
            width: 7,
            text: <?= $visitors; ?>,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'total-subscribers',
            radius: 45,
            value: <?= $jumlah; ?>,
            maxValue: 10000,
            width: 7,
            text: <?= $jumlah; ?>,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })
    </script>

    <!-- myChartLegend Script -->
    <script>
        //Chart

        var ctx = document.getElementById('statisticsChart').getContext('2d');

        var statisticsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
                datasets: [{
                    label: "New Subscribers",
                    borderColor: '#f3545d',
                    pointBackgroundColor: 'rgba(243, 84, 93, 0.6)',
                    pointRadius: 0,
                    backgroundColor: 'rgba(243, 84, 93, 0.4)',
                    legendColor: '#f3545d',
                    fill: true,
                    borderWidth: 2,
                    data: [<?php for ($i = 0; $i < 12; $i++) {
                                echo $databulan[$i] . ',';
                            } ?>]
                }, {
                    label: "Visitors",
                    borderColor: '#fdaf4b',
                    pointBackgroundColor: 'rgba(253, 175, 75, 0.6)',
                    pointRadius: 0,
                    backgroundColor: 'rgba(253, 175, 75, 0.4)',
                    legendColor: '#fdaf4b',
                    fill: true,
                    borderWidth: 2,
                    data: [<?php for ($i = 0; $i < 12; $i++) {
                                echo $visitorsMonthly[$i] . ',';
                            } ?>]
                }, {
                    label: "Total Subscribers",
                    borderColor: '#177dff',
                    pointBackgroundColor: 'rgba(23, 125, 255, 0.6)',
                    pointRadius: 0,
                    backgroundColor: 'rgba(23, 125, 255, 0.4)',
                    legendColor: '#177dff',
                    fill: true,
                    borderWidth: 2,
                    data: [<?php for ($i = 0; $i < 12; $i++) {
                                echo $kumulatif[$i] . ',';
                            } ?>]
                }, {
                    label: "Total Visitors",
                    borderColor: '#00FFFF',
                    pointBackgroundColor: 'rgba(0, 255, 255, 0.6)',
                    pointRadius: 0,
                    backgroundColor: 'rgba(0, 255, 255, 0.4)',
                    legendColor: '#00FFFF',
                    fill: true,
                    borderWidth: 2,
                    data: [<?php for ($i = 0; $i < 12; $i++) {
                                echo $visitorsKumulatif[$i] . ',';
                            } ?>]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                layout: {
                    padding: {
                        left: 5,
                        right: 5,
                        top: 15,
                        bottom: 15
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontStyle: "500",
                            beginAtZero: false,
                            maxTicksLimit: 5,
                            padding: 10
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            zeroLineColor: "transparent"
                        },
                        ticks: {
                            padding: 10,
                            fontStyle: "500"
                        }
                    }]
                },
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<ul class="' + chart.id + '-legend html-legend">');
                    for (var i = 0; i < chart.data.datasets.length; i++) {
                        text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
                        if (chart.data.datasets[i].label) {
                            text.push(chart.data.datasets[i].label);
                        }
                        text.push('</li>');
                    }
                    text.push('</ul>');
                    return text.join('');
                }
            }
        });

        var myLegendContainer = document.getElementById("myChartLegend");

        // generate HTML legend
        myLegendContainer.innerHTML = statisticsChart.generateLegend();

        // bind onClick event to all LI-tags of the legend
        var legendItems = myLegendContainer.getElementsByTagName('li');
        for (var i = 0; i < legendItems.length; i += 1) {
            legendItems[i].addEventListener("click", legendClickCallback, false);
        }
    </script>

    <!-- Notify Script -->
    <script>
        //Notify
        $.notify({
            icon: 'flaticon-alarm-1',
            title: 'Wellcome Back!!',
            message: 'Wellcome back to Skyx Admin Dashboard',
        }, {
            type: 'secondary',
            placement: {
                from: "bottom",
                align: "right"
            },
            time: 1000,
        });
    </script>
</body>

</html>