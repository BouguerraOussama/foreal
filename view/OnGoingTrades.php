<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My On Going Trades</title>
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
<?php
session_start();
require "../controller/config.php";
$connect = Config::getConnexion();
$user = $_SESSION["currentuser"];
$sql = "select * from product where user_id=$user";
$request = $connect->prepare($sql);
$request->execute();
$data = $request->fetchAll();
$sql = "select * from file ";
$request1 = $connect->prepare($sql);
$request1->execute();
$data1 = $request1->fetchAll();
//offer
$sql = "select * from product2 where user_id=$user";
$request2 = $connect->prepare($sql);
$request2->execute();
$data2 = $request2->fetchAll();
$sql = "select * from file2 ";
$request3 = $connect->prepare($sql);
$request3->execute();
$data3 = $request3->fetchAll();
?>

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
                            <p>Exclusive Black Friday ! Offer</p>
                            <span class="coming-time" data-countdown="2021/3/15"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-top-right">
                            <div class="header-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="header-top-action">
                                <ul>
                                    <li>
                                        <div class="header-top-mail">
                                            <p><span>|</span><i class="far fa-envelope"></i><a
                                                    href="https://themebeyond.com/cdn-cgi/l/email-protection#e980878f86a98e84888085c78a8684"><span
                                                        class="__cf_email__"
                                                        data-cfemail="fa93949c95ba9d9f999593949c95d4999597">[email&#160;protected]</span></a>
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
                                    <a href="index.html"><img src="img/logo/logo.png" class="logoh" alt="logo"></a>
                                </div>
                                <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <!-- <li><a href="#">Pages</a></li> -->
                                        <!-- <li><a href="game-overview.html">Overview</a></li> -->
                                        <!-- <li><a href="community.html">Community</a></li> -->
                                        <li class="show"><a href="trade.php">Trade</a>
                                            <ul class="submenu">
                                                <li class="active"><a href="#">My ongoing trades</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="Auction.html">Auction</a>
                                        <li><a href="POINTSSHOP.html">POINTS SHOP</a></li>
                                        <li><a href="forums.html">FORUM</a></li>
                                        <!-- <ul class="submenu">
                                                                                    <li><a href="blog.html">News Page</a></li>
                                                                                    <li><a href="blog-details.html">News Details</a></li>
                                                                                </ul>
                                                                            </li> -->
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-action">
                                    <ul>
                                        <li class="header-shop-cart"><a href="#">
                                                <img src="img/icon/tradeCart.png" width="25px" alt="tradeCart">
                                                <span>0</span></a>
                                            <ul class="minicart">
                                                <li class="d-flex align-items-start">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/cart_p01.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h4>
                                                            <a href="#">Xbox One Controller</a>
                                                        </h4>
                                                        <div class="cart-price">
                                                            <span class="new">$229.9</span>
                                                            <span>
                                                                <del>$229.9</del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Total:</span>
                                                        <span class="f-right">$239.9</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkout-link">
                                                        <a href="cart.html">Shopping Cart</a>
                                                        <a class="red-color" href="checkout.html">Checkout</a>
                                                    </div>
                                                </li>
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
    </header>
    <!-- header-area-end -->

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>My Ongoing <span>Trades</span></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="trade.php">Trade</a></li>
                                    <li class="breadcrumb-item active" aria-current="#">OnGoingTrades</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- upcoming-games -->
        <section class="upcoming-games-area upcoming-games-bg pt-120 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three white-title text-center mb-70">
                            <h2 style="color: rgb(54, 169, 225);">Trades you posted</h2>
                            <p>These are the trades that you posted on the trade page you can click your trades posted
                                to view the offers you got</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php for ($i = 0; $i < count($data); $i++) {
                        if ($data[$i]["status"] > 0) {
                            echo "<div class='col-lg-4 col-md-6'>
                            <div class='upcoming-game-item mb-40'>
                                <div class='upcoming-game-head'>
                                    <div class='uc-game-head-title'>
                                        <span>SEPTEMBER 22, 2020</span> 
                                        <h4><a href='#'>" . $data[$i]["name"] . "</a></h4>
                                    </div>
                                    <div class='uc-game-price'>
                                        <h5>" . $data[$i]['offer_nbr'] . "</h5>
                                    </div>
                                </div>
                                <p>" . $data[$i]['description'] . "</p>
                                <div class='upcoming-game-thumb'>";
                            foreach ($data1 as $row1) {
                                if ($row1["product_id"] == $data[$i]["id"]) {
                                    echo '<img src="data:image;base64,' . base64_encode($row1["data"]) . '" alt="image" style="width:333px; height:216px;">';
                                    break;
                                }
                            }
                            echo "<div class='upcoming-game-cart'>
                                        <a href='#' class='btn transparent-btn'>View what people offred</a>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- upcoming-games-end -->

        <!-- latest-match-area -->
        <section class="latest-match-area latest-match-bg pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three white-title text-center mb-70">
                            <h2><span>trades you offered</span></h2>
                            <p>These are the offers that you made on displayed items you can check them untill the other
                                end accepts your item</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                     if (count($data2)==0){
                            echo" <h2><span>You have made no offers yet</span></h2>";
                        }
                        else{
                    for ($i = 0; $i < count($data2); $i++) {
                       
                        if ($data2[$i]["status"] > 0) {
                            echo "<div class='col-lg-6'>
                        <div class='latest-match-box mb-30'>
                            <div class='latest-match-thumb'>";
                             foreach ($data3 as $row3) {
                                if ($row3["product_id"] == $data2[$i]["id"]) {
                                    echo '<img src="data:image;base64,' . base64_encode($row3["data"]) . '" alt="image" style="width:131px; height:161px;">';
                                    break;
                                }
                            }
                                echo"</div>
                            <div class='tournament-schedule-content'>
                                <h3><a href='#'>Name <span>" . $data2[$i]["name"] . "</span></a></h3>
                                <p>". $data2[$i]["description"]."</p>
                            </div>
                        </div>
                    </div>";
                            
                        }
                    }}
                    ?>
                </div>
            </div>
        </section>
        <!-- latest-match-area-end -->

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
                                <a href="index.html"><img class="logof" src="img/favicon.png" alt="logo_footer"></a>
                            </div>
                            <div class="footer-text">
                                <p>Gemas marketplace the relase etras thats sheets continig passag.</p>
                                <div class="footer-contact">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i> <span>Address : </span>PO Box W75
                                            Street
                                            lan West new queens</li>
                                        <li><i class="fas fa-headphones"></i> <span>Phone : </span>+24 1245 654 235</li>
                                        <li><i class="fas fa-envelope-open"></i><span>Email : </span><a
                                                href="https://themebeyond.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="0f666169604f6a776a627f636a216c6062">[email&#160;protected]</a>
                                        </li>
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
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
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


</html>