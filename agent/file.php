<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <style>
    .navbar{
      background-color : #27253a;
      color : rgb(70, 83, 156);
    }
    .nav-link{
      color:rgb(109, 126, 173);
    }
    .mobile-menu{
      display:none;
    }
    </style>

  </head>
  <?php include ('header.php');?>
  <!--work on this-->
  <body>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
      <!-- PRE LOADER -->
      <section class="preloader">
        <div class="spinner">
          <span class="spinner-rotate"></span>
        </div>
      </section>
      <!--reminder checks work on the above code-->
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-left clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Modules" color="white">
                  Modules
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Technology" color="white">
                  Technology used
                </a>
              </li>
              <?php if(!isset($_SESSION['agent'])){?>
              <li class="nav-item">
                <a class="nav-link" href="login.php" color="white">
                  Login
                </a>
              </li>
                    <?php
                    }
                    else{?>
              <li class="nav-item">
                <a class="nav-link" href="distributor.php" color="white">
                  Distributor
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="agent.php" color="white">
                  Agent
                </a>
              </li>
              <?php
              }
              ?>
            </ul>
          </div>
        </div>

      
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg mt-5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp mt-5"> Cloud Computing Storage </h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <?php if(!isset($_SESSION['agent'])){?>
                    <a href="login.php" class="btn btn-common">Login</a>
                    <?php
                    }
                    else{ ?><span class="text-indigo text-bold text-capitalize"><?php echo $_SESSION['agent'];?></span>
                      <strong class="text-bold text-primary">--</strong> <a href="logout.php" class="fas fa-power-off mr-2 text-danger">Logout</a>
                <?php
                }
                ?>
                  
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Services Section Start -->
    <section id="Modules" class="section-padding">
      <div class="container">
          
      </div>
    </section>
    <!-- Feature Section End -->

    <!-- Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-header text-center">
              <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Powered By</h2>
            </div>
            <div class="info-text">
              <h3><a href="#">Checks</a></h3>
              <p>R1911061W</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Section End -->


	  <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
              <div class="footer-logo mb-3">
                <img src="assets/img/logo.png" alt="">
              </div>
              <p>Supervision under Mr Gotora</p>
            </div>
          </div>
        </div>  
      </div>     
    </footer> 
    <!-- Footer Section End -->

    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright © 2021 UIdeck All Right Reserved</p>
          </div>
        </div>
      </div>
    </section>   

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery-min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/wow.js"></script>
    <script src="../assets/js/jquery.nav.js"></script>
    <script src="../assets/js/scrolling-nav.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/jquery.slicknav.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
