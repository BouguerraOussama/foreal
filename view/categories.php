
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from themebeyond.com/html/geco/Geco/community.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 12:57:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Geco - eSports Gaming HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="img/icon/o.gif" alt="">
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-area -->
    <header>
        <div class="header-top-area s-header-top-area d-none d-lg-block">
            <div class="container-fluid s-container-full-padding">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="header-top-offer">
                            <p style="color: rgb(54, 169, 225);">Premium Offer</p>
                            <span class="coming-time" data-countdown="2022/11/15"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-top-right">
                            <!-- <div class="header-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div> -->
                            <div class="header-top-action">
                                <ul>
                                    <li>
                                        <div class="header-top-mail">
                                            <p><span></span>
                                                <!-- <i class="far fa-envelope"></i><a
                                                            href="https://themebeyond.com/cdn-cgi/l/email-protection#85ecebe3eac5e2e8e4ece9abe6eae8"><span
                                                                class="__cf_email__"
                                                                data-cfemail="076e69616847606264686e6961682964686a">[email&#160;protected]</span>
                                                            </a> -->
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="transparent-header">
            <div class="container-fluid s-container-full-padding">
                <div class="row">
                    <div class="col-12">
                        <div class="main-menu menu-style-two">
                            <nav>
                            <div class="logo">
                  <a href="index.php"><img src="img/logo/logo.png" class="logoh" alt="logo" /></a>
                </div>
                <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <!-- <li><a href="#">Pages</a></li> -->
                    <!-- <li><a href="game-overview.html">Overview</a></li> -->
                    <!-- <li><a href="community.html">Community</a></li> -->
                    <li><a href="trade.php">Trade</a>
                                            <ul class="submenu">
                                                <li><a href="OnGoingTrades.php">My ongoing trades</a></li>
                                            </ul>
                                        </li>
                    <li >
                                    <a href="../controller/displayAllAuctions.php">Auctions</a>
                                    <ul style="display: flex;flex-direction: column;" class="submenu">
                                        <li><a href="displayownedauctionsview.php">my auctions</a></li>
                                    </ul>
                                </li>
                    <li><a href="../controller/displayAllCompetitions.php">Competitions</a>
                    <li><a href="POINTSSHOP.php">POINTS SHOP</a></li>
                    <!-- <ul class="submenu">
                                                <li><a href="blog.html">News Page</a></li>
                                                <li><a href="blog-details.html">News Details</a></li>
                                            </ul>
                                        </li> -->
                    <li class="show"><a href="categories.php">FORUM</a></li>
                    <li >
                                    <a href="javascript:;">Report</a>
                                    <ul style="display: flex;flex-direction: column;" class="submenu">
                                        <li><a href="ajouterreclamation.php">Send Report</a></li>
                                        <li><a href="consulterreclamation.php">Report History</a></li> 
                                    </ul>
                                </li>
                  </ul>
                </div>
                <div class="header-action">
                                    <ul>
                                        <li class="header-shop-cart"><a href="#"><i class="fas fa-shopping-basket"
                                                    style="color:rgb(54, 169, 225);"></i><span id='qofbasket'>0</span></a>
                                            <ul id='shopcart' class="minicart">
                                                
                                                
                                            </ul>
                                        </li>
                                        <li class="header-search"><a href="#" data-toggle="modal"
                                                data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                    <!-- Modal Search -->
                    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup" class="popup">
            <div id="info"></div>
            <div id="link" style="margin:auto;"></div>
        </div>
    </header>
    <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Our <span>Community</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Community</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- community-area -->
            <div class="community-area primary-bg pt-120 pb-175">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="community-wrap">
                                <div class="table-responsive-xl">
                                    <table class="table mt-0">
                                        <thead>
                                            <tr>
                                               
                                                
                                                <th scope="col">CATEGORIES</th>
                                                <th scope="col">POSTS</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr class="community-post-type">
                                                <th><span>Game Concept</span></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="threads.php?category=News">News</a>
                                                            <span>by <a href="#">Tanvir snap</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>3</td>
                                                
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">Games</a>
                                                            <span>by <a href="#">Killer12</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>5</td>
                                                
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">General</a>
                                                            <span>by <a href="#">Tanvir snap</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                            <a href="#">@Design</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>7</td>
                                                
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <tbody>
                                            <tr class="community-post-type">
                                                <th><span>Zombie Island</span></th>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">Trades</a>
                                                            <span>by <a href="#">Tanvir snap</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                
                                                <td>4</td>
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">Help</a>
                                                            <span>by <a href="#">Killer12</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@Design</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                
                                                <td>9</td>
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="community-post-wrap">
                                                        <div class="community-post-content">
                                                            <a href="#">Auction</a>
                                                            <span>by <a href="#">Tanvir snap</a> Yesterday 12 : 19</span>
                                                        </div>
                                                        <div class="community-post-tag">
                                                            <a href="#">@All</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                
                                                <td>12</td>
                                                <td class="community-bell"><a href="#"><i class="far fa-bell"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="community-sidebar">
                                <div class="widget community-widget mb-30">
                                    <div class="community-widget-title mb-25">
                                        <h5>share public</h5>
                                    </div>
                                    <div class="community-sidebar-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i>Share With Facebook</a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i>Share With Twitter</a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i>Share With Pinterest</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget community-widget">
                                    <div class="community-widget-title mb-25">
                                        <h5>new released game</h5>
                                    </div>
                                    <div class="community-sidebar-game">
                                        <ul>
                                            <li>
                                                <div class="sidebar-new-game-thumb">
                                                    <a href="#">
                                                        <img src="img/images/sidebar_new_game01.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="sidebar-new-game-content">
                                                    <span>Yesterday 12 : 19</span>
                                                    <h5><a href="#">Sky Warrior Game involves</a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-new-game-thumb">
                                                    <a href="#">
                                                        <img src="img/images/sidebar_new_game02.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="sidebar-new-game-content">
                                                    <span>Yesterday 12 : 19</span>
                                                    <h5><a href="#">Sky Warrior Game involves</a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="sidebar-new-game-thumb">
                                                    <a href="#">
                                                        <img src="img/images/sidebar_new_game03.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="sidebar-new-game-content">
                                                    <span>Yesterday 12 : 19</span>
                                                    <h5><a href="#">Sky Warrior Game involves</a></h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="community-bg-shape"><img src="img/images/community_bg_shape.png" alt=""></div>
            </div>
            <!-- community-area-end -->


        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <footer>
            <div class="footer-top footer-bg s-footer-bg">
                <!-- newsletter-area -->
                <div class="newsletter-area s-newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="newsletter-wrap">
                                    <div class="section-title newsletter-title">
                                        <h2>Our <span>Newsletter</span></h2>
                                    </div>
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <div class="newsletter-form-grp">
                                                <i class="far fa-envelope"></i>
                                                <input type="email" placeholder="Enter your email...">
                                            </div>
                                            <button>SUBSCRIBE <i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- newsletter-area-end -->
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    <p>Gemas marketplace the relase etras thats sheets continig passag.</p>
                                    <div class="footer-contact">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> <span>Address : </span>PO Box W75 Street
                                                lan West new queens</li>
                                            <li><i class="fas fa-headphones"></i> <span>Phone : </span>+24 1245 654 235</li>
                                            <li><i class="fas fa-envelope-open"></i><span>Email : </span><a href="https://themebeyond.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ef7f0f8f1defbe6fbf3eef2fbb0fdf1f3">[email&#160;protected]</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Products</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Graphics (26)</a></li>
                                        <li><a href="#">Backgrounds (11)</a></li>
                                        <li><a href="#">Fonts (9)</a></li>
                                        <li><a href="#">Music (3)</a></li>
                                        <li><a href="#">Photography (3)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Need Help?</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">FAQUse Cases</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Follow us</h5>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Newsletter Sign Up</h5>
                                </div>
                                <div class="footer-newsletter">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email">
                                        <button><i class="fas fa-rocket"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-fire"><img src="img/images/footer_fire.png" alt=""></div>
                <div class="footer-fire footer-fire-right"><img src="img/images/footer_fire.png" alt=""></div>
            </div>
            <div class="copyright-wrap s-copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2020 <a href="#">Geco</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-img text-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.lettering.js"></script>
        <script src="js/jquery.textillate.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/geco/Geco/community.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 12:58:13 GMT -->
</html>
