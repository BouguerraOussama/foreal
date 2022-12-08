<?php include('../controller/userController.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Colorlib Templates" />
  <meta name="author" content="Colorlib" />
  <meta name="keywords" content="Colorlib Templates" />

  <!-- Title Page-->
  <title>OnlyTrades</title>
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <!-- Vendor CSS-->
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all" />
  <link rel="stylesheet" href="css/register.css" />
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <!-- Main CSS-->
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
  <?php if (($_SESSION['email'] == 'success') && ($_SESSION['register'] == 'success')) { ?>
    <script type="text/javascript">
      $(document).ready(function() {
        toastr.options.timeOut = 2500; // 1.5s
        toastr.success('Check your email for verification!', 'Successfully registered');
      });
    </script>
  <?php } elseif (($_SESSION['email'] != 'success') || ($_SESSION['register'] != 'success')) { ?>
    <script type="text/javascript">
      $(document).ready(function() {
        toastr.options.timeOut = 2500; // 1.5s
        toastr.error('Check your information!', 'Error');
      });
    </script>
  <?php } ?>
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
                      <li class="show"><a href="index.php">Home</a></li>
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
    <div class="page-wrapper bg-gra-02">
      <div class="wrapper wrapper--w960">
        <div class="card card-4">
          <div class="card-body">
            <div class="register100-pic js-tilt" data-tilt>
              <a href="index.php"><img src="img/logo/logo.png" alt="IMG" /></a>
            </div>
            <h2 class="title">
              Register <span style="color: rgb(54, 169, 225)">Now !</span>
            </h2>

            <form method="POST" action="../controller//userController.php">
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="labelRegister">first name</label>
                    <input class="input--style-4" type="text" name="firstName" />
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="labelRegister">last name</label>
                    <input class="input--style-4" type="text" name="lastName" />
                  </div>
                </div>
              </div>
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="labelRegister">Birthday</label>
                    <div class="input-group-icon">
                      <input class="input--style-4 js-datepicker" type="text" name="birthdate" />
                      <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="labelRegister">Email</label>
                    <input class="input--style-4" type="email" name="email" />
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="labelRegister">Password</label>
                    <input class="input--style-4" type="password" name="password" />
                  </div>
                </div>

              </div>
              <div class="input-group">
                <label class="labelRegister">Gender</label>
                <div class="rs-select2 js-select-simple select--no-search">
                  <select name="gender">
                    <option disabled="disabled" selected="selected">
                      Choose gender
                    </option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  <div class="select-dropdown"></div>
                </div>
              </div>
              <div class="p-t-15">
                <button name="reg_user" class="btnregister btn--radius-2 btn--blue" type="submit">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="copyright-wrap s-copyright-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="copyright-text">
                <p>
                  Copyright © 2022 <a href="index.php">OnlyTrades</a> All
                  Rights Reserved.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Jquery JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Vendor JS-->
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/datepicker/moment.min.js"></script>
  <script src="vendor/datepicker/daterangepicker.js"></script>
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $(".js-tilt").tilt({
      scale: 1.1,
    });
  </script>
  <!-- Main JS-->
  <script src="js/register.js"></script>
  <script src="js/main.js"></script>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->