<?php
session_start();
require_once 'admin/dashboard_includes/db.php';
//Select all data from table

/* Services */
$select_service = "SELECT * FROM `services` WHERE `status` = 1 LIMIT 6";
$services = mysqli_query($db_connect, $select_service);

/* social */
$select_social = "SELECT * FROM `social` WHERE `id` = 1";
$social = mysqli_query($db_connect, $select_social);
$social = mysqli_fetch_assoc($social);

/* Fact */
$select_fact = "SELECT * FROM `fact_areas` WHERE `status` = 1 LIMIT 4";
$facts = mysqli_query($db_connect, $select_fact);

/* About */
$select_about_info = "SELECT * FROM `about` WHERE `id` = 1";
$about_info_sql = mysqli_query($db_connect, $select_about_info);
$about_info = mysqli_fetch_assoc($about_info_sql);

/* About Bar*/
$select_p_bar = "SELECT * FROM `skillbar` WHERE `status` = 1";
$p_bar_sql = mysqli_query($db_connect, $select_p_bar);

/* Portfolio */
$select_portfolio = "SELECT * FROM `portfolio` WHERE `status` = 1";
$portfolio_sql = mysqli_query($db_connect, $select_portfolio);

/* Header/Banner */
$select_header = "SELECT * FROM `header` WHERE `status` = 1 LIMIT 1";
$header_infos = mysqli_query($db_connect, $select_header);
$header_info = mysqli_fetch_assoc($header_infos);

/* LOGO Image */
$select_logo = "SELECT * FROM `logo` WHERE `id` = 1";
$logo_sql = mysqli_query($db_connect, $select_logo);
$logo = mysqli_fetch_assoc($logo_sql);


/* Contact Info */
$select_address = "SELECT * FROM `address` WHERE `id` = 1";
$address_sql = mysqli_query($db_connect, $select_address);
$address = mysqli_fetch_assoc($address_sql);

/* Brand Image */
$select_brands = "SELECT * FROM `brands` WHERE `status` = 1";
$brands_sql = mysqli_query($db_connect, $select_brands);

/* Testimonial */
$select_testimonials = "SELECT * FROM `testimonials` WHERE `status` = 1";
$testimonials_sql = mysqli_query($db_connect, $select_testimonials);

/* Copyright Section */
$select_copyrights = "SELECT * FROM `copyright` WHERE `id` = 1";
$copyrights_sql = mysqli_query($db_connect, $select_copyrights);
$copyright = mysqli_fetch_assoc($copyrights_sql);

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.php" class="navbar-brand logo-sticky-none"><img src="img/logo/<?= $logo['main_img'] ?>" alt="Logo"></a>
                                <a href="index.php" class="navbar-brand s-logo-none"><img src="img/logo/<?= $logo['secondary_img'] ?>" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="#">
                    <img src="img/logo/<?= $logo['main_img'] ?>" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p><?= $address['address'] ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p><?= $address['phone'] ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p><?= $address['email'] ?></p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="<?= $social['fb'] ?>"><i class="fab fa-facebook-f"></i></a>
                <a href="<?= $social['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                <a href="<?= $social['insta'] ?>"><i class="fab fa-pinterest"></i></a>
                <a href="<?= $social['pinterest'] ?>"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?= $header_info['header_title'] ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.6s"><?= $header_info['header_desp'] ?></p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li><a href="<?= $social['fb'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?= $social['twitter'] ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?= $social['insta'] ?>"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="<?= $social['pinterest'] ?>"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s"><?= $header_info['cta_btn'] ?></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                            <img src="img/banner/banner_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/banner/<?= $about_info['img_dir'] ?>" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p><?= $about_info['details'] ?></p>
                            <h3><?= $about_info['progress_topic'] ?>:</h3>
                        </div>
                        <?php foreach ($p_bar_sql as $skillbar) : ?>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?= $skillbar['year'] ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $skillbar['skill_name'] ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $skillbar['value'] . "%" ?>;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($services as $service) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?= $service['service_icon'] ?>"></i>
                                <h3><?= $service['service_title'] ?></h3>
                                <p><?= $service['service_details'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($portfolio_sql as $portfolio) : ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="img/project/<?= $portfolio['img_dir'] ?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?= $portfolio['category'] ?></span>
                                    <h4><a href="portfolio-single.php?id=<?= $portfolio['id'] ?>"><?= $portfolio['project_name'] ?></a></h4>
                                    <a href="portfolio-single.php?id=<?= $portfolio['id'] ?>" class="arrow-btn">More information <span></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                        <?php foreach ($facts as $fact) : ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?= $fact['icon'] ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $fact['project_numbers'] ?></span></h2>
                                        <span><?= $fact['project_topic'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">
                            <?php foreach ($testimonials_sql as $testimonial) : ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="img/testi_avatar/<?= $testimonial['img_dir'] ?>" alt="img" width="150" height="150" style="object-fit: cover; border-radius:50%">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?= $testimonial['msg'] ?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $testimonial['name'] ?></h5>
                                            <span><?= $testimonial['designation'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <?php foreach ($brands_sql as $brand) : ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="img/brand/<?= $brand['img_dir'] ?>" alt="img">
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                            <h5>OFFICE IN <span><?= $address['city'] ?></span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span><?= $address['address'] ?></li>
                                    <li><i class="fas fa-headphones"></i><span>Phone : </span><?= $address['phone'] ?></li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span> <?= $address['email'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <!-- if session found echo that with alert -->
                            <?php if (isset($_SESSION["smsg"])) : ?>

                                <div class="alert alert-success  alert-dismissible fade show" role="alert">
                                    <?= $_SESSION["smsg"] ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                            <?php endif;
                            unset($_SESSION["smsg"]) ?>
                            <!-- if session found echo that with alert -->
                            <?php if (isset($_SESSION["emsg"])) : ?>

                                <div class="alert alert-info  alert-dismissible fade show" role="alert">
                                    <?= $_SESSION["emsg"] ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                            <?php endif;
                            unset($_SESSION["emsg"]) ?>
                            <form action="/admin/messages/contact_post.php" method="POST">
                                <input type="text" name="name" placeholder="your name *" required>
                                <input type="email" name="email" placeholder="your email *" required>
                                <textarea name="message" id="message" placeholder="your message *" required></textarea>
                                <button type="submit" class="btn">send messege</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span><?= $copyright['copyright_name'] ?></span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

</html>