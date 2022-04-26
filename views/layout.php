<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/neer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 02:38:06 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PTNPV7L');</script>
    <!-- End Google Tag Manager -->
    <title>Dari.tn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/leaflet.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/map.css" >
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="assets/css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="assets/css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google assets/fonts -->
    <link rel="stylesheet" type="text/css" href="https://assets/fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="assets/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="assets/js/html5shiv.min.js"></script>
    <script  src="assets/js/respond.min.js"></script>
    <![endif]-->
    <style>
        .setting-button{
            display: none;
        }
    </style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTNPV7L"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Main header start -->
<header class="main-header header-transparent sticky-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/dari_logo.png" height="100" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="index.php">
                            Home
                        </a>
                       
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="?controller=AboutUs">
                            About us </a>
                       
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link" href="?controller=annonces&action=liste">Annonces</a>
                    </li>
                    <?php if(!isset($client)): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="?controller=authentification">
                            Login client
                        </a>
                    </li>
                    <li class="nav-item sp" >
                        <a class="nav-link" href="?controller=inscription">
                            Inscription
                        </a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item sp" >
                            <a class="nav-link" href="logoutClient.php">
                                Se déconnecter
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item sp">
                        <a href="?controller=AjouterAnnonce" class="nav-link link-color"><i class="fa fa-plus"></i> Ajouter annonce</a>
                    </li>
                    <?php if(isset($client)): ?>
                        <li class="nav-item sp">
                            <a href="#" class="nav-link link-color"><i class="fa fa-user"></i> <?php  echo $client->getNom();?></a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<?php require_once("dispatcher.php"); ?>  

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <img src="assets/img/logos/logo.png" alt="logo" height="100"class="f-logo">
                    <div class="text">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Nous</h4>
                    <div class="f-border"></div>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>technopole,Manouba
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:sales@hotelempire.com"Dari.tn</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+55-417-634-7071">99721250</a>
                        </li>
                        <li>
                            <i class="flaticon-fax"></i>95191819
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <div class="f-border"></div>
                    <ul class="links">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="AboutUscontroller.php">Nos agents </a>
                        </li>
                       
                        <li>
                            <a href="contact.html">Contact </a>
                        </li>
                       
                        <li>
                            <a href="properties-details.html">Properties Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Sub footer start -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <p class="copy">© 2022 Realisé par Ayari samar && Messoud firas <a href="#"></p>
            </div>
            <div class="col-lg-4 col-md-4">
                <ul class="social-list clearfix">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="http://themevessel-item.s3-website-us-east-1.amazonaws.com/neer/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script  src="assets/js/bootstrap-submenu.js"></script>
<script  src="assets/js/rangeslider.js"></script>
<script  src="assets/js/jquery.mb.YTPlayer.js"></script>
<script  src="assets/js/bootstrap-select.min.js"></script>
<script  src="assets/js/jquery.easing.1.3.js"></script>
<script  src="assets/js/jquery.scrollUp.js"></script>
<script  src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="assets/js/leaflet.js"></script>
<script  src="assets/js/leaflet-providers.js"></script>
<script  src="assets/js/leaflet.markercluster.js"></script>
<script  src="assets/js/dropzone.js"></script>
<script  src="assets/js/slick.min.js"></script>
<script  src="assets/js/jquery.filterizr.js"></script>
<script  src="assets/js/jquery.magnific-popup.min.js"></script>
<script  src="assets/js/jquery.countdown.js"></script>
<script  src="assets/js/maps.js"></script>
<script  src="assets/js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="assets/js/ie10-viewport-bug-workaround.js"></script>

<script>
    $(document).ready(function(){
        $(".setting-button").hide();
    })
</script>
</body>

<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/neer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 02:43:45 GMT -->
</html>