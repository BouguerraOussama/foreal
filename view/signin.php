<!DOCTYPE html>
<html lang="en">

<head>
  <title>OnlyTrades</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css" />
  <!--===============================================================================================-->
</head>

<body>
  <!-- preloader -->
  <div id="preloader">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <img src="img/icon/o.gif" alt="" />
      </div>
    </div>
  </div>
  <!-- preloader-end -->
  <!-- <header>
      <div id="sticky-header" class="transparent-header-login">
        <div class="container-fluid s-container-full-padding">
          <div class="row">
            <div class="col-12">
              <div class="main-menu menu-style-two">
                <nav>
                  <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                    <ul>
                      <li class="show"><a href="index.html">Home</a></li>
                      <li><a href="trade.html">Trade</a></li>
                      <li><a href="Auction.html">Auction</a></li>
                      <li><a href="POINTSSHOP.html">POINTS SHOP</a></li>
                      <li><a href="forums.html">FORUM</a></li>
                      <li><a href="contact.html">contact</a></li>
                    </ul>
                  </div>
                  <div class="header-action"></div>
                </nav>
              </div>
              <div class="mobile-menu"></div>
            </div>
          </div>
        </div>
      </div>
    </header> -->

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <a href="index.html"><img src="img/logo/logo.png" alt="IMG" /></a>
        </div>


        <form method="POST" action="../controller//userController.php" class="login100-form validate-form">


          <span class="login100-form-title">
            SIGN IN <span style="color: rgb(54, 169, 225)">NOW</span>
          </span>

          <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email" />
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password" placeholder="Password" />
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>

          <div class="container-login100-form-btn">
            <button name="login_user" class="login100-form-btn">Login</button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1"> Forgot </span>
            <a class="txt2" href="#"> Username / Password? </a>
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="signup.html">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
    <footer>
      <div class="copyright-wrap s-copyright-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="copyright-text">
                <p>
                  Copyright © 2022 <a href="index.html">OnlyTrades</a> All
                  Rights Reserved.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $(".js-tilt").tilt({
      scale: 1.1,
    });
  </script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  <script src="js/login.js"></script>
</body>

</html>