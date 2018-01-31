
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lane77 - Selling ki dunia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="/css/select2.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="/css/hover-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Modernizr Js -->
    <script src="/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an 
        <strong>outdated</strong> browser. Please 
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header-three" class="header-style1 header-fixed">
                <div class="header-top-bar top-bar-style1">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-8">
                                <div class="top-bar-left">
                                    <a href="post-ad.html" class="cp-default-btn hidden-lg hidden-md">Post Your Ad</a>
                                    <p class="hidden-sm hidden-xs">
                                        <i class="fa fa-life-ring" aria-hidden="true"></i>Have any questions? +91 9922367414 or mail@lane77
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-4">
                                <div class="top-bar-right">
                                    <ul>
                                        <li>
                                            <a href="/login" class="login-btn" >
                                                <i class="fa fa-lock" aria-hidden="true"></i>Login
                                            </a>
                                        </li>
                                        <li class="hidden-mb">
                                            <a class="login-btn" href="#" id="login-button">
                                                <i class="fa fa-comments-o" aria-hidden="true"></i>Live Chat
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-primary" id="sticker">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="index.html" class="img-responsive">
                                        <img src="/img/logo.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 possition-static">
                                <div class="cp-main-menu">
                                    <nav>
                                        <ul>
                                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                                            <li class="{{ request()->is('how-it-works') ? 'active' : '' }}"><a href="/how-it-works">How It Works?</a></li>
                                           
                                            <li class="{{ request()->is('products') ? 'active' : '' }}"><a href="/products">Browse Ads</a></li>
                                         </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                                <a href="/post-ad" class="cp-default-btn">Post Your Ad</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                     <ul>
                                            <li class="active"><a href="/">Home</a></li>
                                            <li><a href="/how-it-works">How It Works?</a></li>
                                           
                                            <li><a href="/products">Browse Ads</a></li>
                                        </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->

        <!-- Search Area Start Here -->
        <section class="search-layout1 bg-body full-width-border-bottom fixed-menu-mt">
            <div class="container">
                <form id="cp-search-form">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group search-input-area input-icon-location">
                                <select id="location" class="select2">
                                    <option class="first" value="0">Select Location</option>
                                    <option value="1">Nashik</option>
                                    <option value="2">Pune</option>
                                    <option value="3">Mumbai</option>
                                    <option value="4">Delhi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group search-input-area input-icon-category">
                                <select id="categories" class="select2">
                                    <option class="first" value="0">Select Categories</option>
                                    <option value="1">Electronics</option>
                                    <option value="2">Fashin &amp; Life Style</option>
                                    <option value="3">Car &amp; Vehicles</option>
                                    <option value="3">Hobby, Sport &amp; Kids</option>
                                    <option value="3">Pets &amp; Animals</option>
                                    <option value="3">Overseas Jobs</option>
                                    <option value="3">Property</option>
                                    <option value="3">Education</option>
                                    <option value="3">Home &amp; Garden</option>
                                    <option value="3">Business &amp; Industry</option>
                                                        
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-8 col-xs-8 col-mb-12">
                            <div class="form-group search-input-area input-icon-keywords">
                                <input placeholder="Enter Keywords here ..." value="" name="key-word" type="text">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 col-mb-12 text-right text-left-mb">
                            <a href="#" class="cp-search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>Search
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Search Area End Here -->
            

        @yield('content')    


        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area-top s-space-equal">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">About us</h3>
                                <ul class="useful-link">
                                    <li>
                                        <a href="about.html">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Career</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms &amp; Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Sitemap</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">How to sell fast</h3>
                                <ul class="useful-link">
                                    <li>
                                        <a href="#">How to sell fast</a>
                                    </li>
                                    <li>
                                        <a href="#">Buy Now on Lane77</a>
                                    </li>
                                    <li>
                                        <a href="#">Membership</a>
                                    </li>
                                    <li>
                                        <a href="#">Banner Advertising</a>
                                    </li>
                                    <li>
                                        <a href="#">Promote your ad</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">Help &amp; Support</h3>
                                <ul class="useful-link">
                                    <li>
                                        <a href="#">Live Chat</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="#">Stay safe on Lane77</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">Follow Us On</h3>
                                <ul class="folow-us">
                                    <li>
                                        <a href="#">
                                            <img src="/img/footer/follow1.jpg" alt="follow">
                                        </a>
                                    </li>
                                    
                                </ul>
                                <ul class="social-link">
                                    <li class="fa-classipost">
                                        <a href="#">
                                            <img src="/img/footer/facebook.jpg" alt="social">
                                        </a>
                                    </li>
                                    <li class="tw-classipost">
                                        <a href="#">
                                            <img src="/img/footer/twitter.jpg" alt="social">
                                        </a>
                                    </li>
                                    <li class="yo-classipost">
                                        <a href="#">
                                            <img src="/img/footer/youtube.jpg" alt="social">
                                        </a>
                                    </li>
                                    <li class="pi-classipost">
                                        <a href="#">
                                            <img src="/img/footer/pinterest.jpg" alt="social">
                                        </a>
                                    </li>
                                    <li class="li-classipost">
                                        <a href="#">
                                            <img src="/img/footer/linkedin.jpg" alt="social">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-12 text-center-mb">
                            <p>Copyright © 2018. Powered By <a href="http://solicitousbusiness.com">Solicitous.</a></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-12 text-right text-center-mb">
                            <ul>
                                <li>
                                    <img src="/img/footer/card1.jpg" alt="card">
                                </li>
                                <li>
                                    <img src="/img/footer/card2.jpg" alt="card">
                                </li>
                                <li>
                                    <img src="/img/footer/card3.jpg" alt="card">
                                </li>
                                <li>
                                    <img src="/img/footer/card4.jpg" alt="card">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="title-default-bold mb-none">Login</div>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form>
                            <label>Username or email address *</label>
                            <input type="text" placeholder="Name or E-mail" />
                            <label>Password *</label>
                            <input type="password" placeholder="Password" />
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Remember Me</label>
                            </div>
                            <button class="default-big-btn" type="submit" value="Login">Login</button>
                            <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
                            <label class="lost-password"><a href="#">Lost your password?</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->
    <!-- Report Abuse Modal Start-->
    <div class="modal fade" id="report_abuse" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content report-abuse-area radius-none">
                <div class="gradient-wrapper">
                    <div class="gradient-title">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="item-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>There's Something Wrong With This Ads?</h2>
                    </div>
                    <div class="gradient-padding reduce-padding">
                        <form id="report-abuse-form">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Your E-mail</label>
                                <input type="text" id="first-name" class="form-control" placeholder="Type your mail here ...">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Your Reason</label>
                                    <textarea placeholder="Type your reason..." class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="cp-default-btn-sm">Submit Now!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Report Abuse Modal End-->
    <!-- jquery-->
    <script src="/js/jquery-2.2.4.min.js " type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js " type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js " type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="/js/wow.min.js"></script>
    <!-- Owl Cauosel JS -->
    <script src="/vendor/OwlCarousel/owl.carousel.min.js " type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="/js/jquery.meanmenu.min.js " type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="/js/jquery.scrollUp.min.js " type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <!-- Select2 Js -->
    <script src="/js/select2.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="/js/isotope.pkgd.min.js " type="text/javascript"></script>

    <script src="/js/jquery.zoom.min.js"></script>

    <!-- Magnific Popup -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- Custom Js -->
    <script src="/js/main.js " type="text/javascript"></script>
</body>

</html>