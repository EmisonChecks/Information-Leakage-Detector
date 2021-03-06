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
     <?php include('inc/navbar.php') ?>

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg mt-5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp mt-5">Cloud Computing Information Leakage Agent Detection</h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <?php if(!isset($_SESSION['admin'])){?>
                    <a href="login.php" class="btn btn-primary">Login</a>
                    <?php
                    }
                    else{ ?><span class="text-indigo text-bold text-capitalize"><?php echo $_SESSION['admin'];?></span>
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
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Modules</h2>
        </div>
        <div class="row">
         
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
              <div class="icon">
                <i class="lni-laptop-phone"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Front End</a></h3>
                <p>Created using Bootstrap</p>
              </div>
            </div>
          </div>
         
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni-files"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Encryption</a></h3>
                <p>Uploaded are Encrypted using AES Algorithm</p>
              </div>
            </div>
          </div>
          
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-pencil-alt"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Embed Files</a></h3>
                <p>Using many different Techniques we have embedded data into the files being uploaded for easier Tracking</p>
              </div>
            </div>
          </div>
           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-cloud-download"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">S3 Storage</a></h3>
                <p>Using the PHP SDK for AWS S3 we can store and retrieve files for all users using individual buckets</p>
              </div>
            </div>
          </div>

           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-bar-chart"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Document Similarity</a></h3>
                <p> The use of Cosine SImilarity to Verify the Document Indenticality</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->


    <!-- Feature Section Start -->
    <section id="Technology" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Algorithms and Technology Used</h2>
        </div>
        <div class="row">
         
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
              <div class="services-content">
                <h3><a href="#">HTML/Bootstrap</a></h3>
              </div>
            </div>
          </div>
         
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="services-content">
                <h3><a href="#">PHP</a></h3>
              </div>
            </div>
          </div>

          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
              <div class="services-content">
                <h3><a href="#">AES ALgorithm</a></h3>
              </div>
            </div>
          </div>

           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="services-content">
                <h3><a href="#">Composer</a></h3>
              </div>
            </div>
          </div>

           <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="services-content">
                <h3><a href="#">LSB Algorithm</a></h3>
              </div>
            </div>
          </div>

        </div>
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
            <p>Copyright ?? 2021 UIdeck All Right Reserved</p>
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
