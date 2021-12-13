<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="/mainpage/img/icon/favicon.ico" type="image/x-icon" />

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
                                                <h4>Hizrian</h4>
                                                <p class="text-muted">admin@skyx.fund</p><a href="#" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Account Setting</a>
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
                                    Hizrian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
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
                                <?php if ($jumlahusers > 0) : ?>
                                    <span class="badge badge-info"><?= $jumlahusers; ?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                        <!-- Teams -->
                        <li class="nav-item <?php if ($tab == "teams" || $tab == "add teams" || $tab == "edit teams") echo "active"; ?>">
                            <a href="/admin/teams">
                                <i class="fas fa-id-card"></i>
                                <p>Teams</p>
                            </a>
                        </li>
                        <!-- Partnership -->
                        <li class="nav-item <?php if ($tab == "partnership" || $tab == "add partnership" || $tab == "edit partnership") echo "active"; ?>">
                            <a href="/admin/partnership">
                                <i class="fas fa-handshake"></i>
                                <p>Partnership</p>
                            </a>
                        </li>
                        <!-- Portfolio -->
                        <li class="nav-item <?php if ($tab == "portfolio" || $tab == "add portfolio" || $tab == "edit portfolio") echo "active"; ?>">
                            <a href="/admin/portfolio">
                                <i class="fas fa-folder-open"></i>
                                <p>Portfolio</p>
                            </a>
                        </li>
                        <!-- Projects -->
                        <li class="nav-item <?php if ($tab == "projects" || $tab == "add projects" || $tab == "edit projects") echo "active"; ?>">
                            <a href="/admin/projects">
                                <i class="fas fa-file-signature"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <!-- Articles -->
                        <li class="nav-item <?php if ($tab == "artikel" || $tab == "add artikel" || $tab == "edit artikel") echo "active"; ?>">
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

        <?= $this->renderSection('edit'); ?>

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
    <script src="/admin/assets/js/setting-demo2.js"></script>

    <script>
        $('#startdate').datetimepicker({
            format: 'MM/DD/YYYY'
        });

        $('#enddate').datetimepicker({
            format: 'MM/DD/YYYY'
        });

        $('#state').select2({
            theme: "bootstrap"
        });

        /* validate */

        // validation when select change
        $("#state").change(function() {
            $(this).valid();
        })

        // validation when inputfile change
        $("#uploadImg").on("change", function() {
            $(this).parent('form').validate();
        })

        $("#exampleValidation").validate({
            validClass: "success",
            rules: {
                gender: {
                    required: true
                },
                confirmpassword: {
                    equalTo: "#password"
                },
                birth: {
                    date: true
                },
                uploadImg: {
                    required: false,
                },
            },
            highlight: function(element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function(element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            },
        });
    </script>

</body>

</html>