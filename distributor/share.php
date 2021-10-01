<?php
session_start();
include('dbconnect.php');
include('session.php');
include('inc/dbclass.php');
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
      <?php include('navbar.php'); ?>

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg mt-5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp mt-5">Cloud Computing Information Leakage Agent Detection</h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <?php if(!isset($_SESSION['distributor'])){?>
                    <a href="login.php" class="btn btn-common">Login</a>
                    <?php
                    }
                    else{ ?><span class="text-indigo text-bold text-capitalize"><?php echo $_SESSION['distributor'];?></span>
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
      <?php
if(isset($_POST['share'])){
  
    $user = $_POST['user'];
    $fname= $_POST['file'];
    $path = $_POST['path'];
    $key = $_POST['key'];
}
?>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-12">
                  <h4>Select Agent </h4>
                  <hr>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <form method="POST" action="manage.php">
                      
                      <input type="hidden" name="user" value="<?php echo $user ; ?>">
                      <input type="hidden" name="fname" value="<?php echo $fname ; ?>">
                      <input type="hidden" name="path" value="<?php echo $path ; ?>">

                      <div class="form-group row">
                      <label for="name" class="col-4 col-form-label">Location *</label> 
                      <div class="col-8">
                        <input id="name" name="location" placeholder="Agent Location" class="form-control here"  type="text" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="lastname" class="col-4 col-form-label">Agent Name *</label> 
                      <div class="col-8">
                          <?php
                           $ds="select * from agent";
                           $qdis = mysqli_query($conn, $ds);
                          ?>
                          <select name="agent" id="" class="form-control" >
                              
                              <?php while($dist = mysqli_fetch_assoc($qdis)): ?>
                              <option value="<?php echo $dist['username'] ?>"><?php echo $dist['name'] ?></option>
                              <?php endwhile; ?>
                          </select>
                        </div>
                    </div> 
                    
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="share" type="submit" id="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
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
