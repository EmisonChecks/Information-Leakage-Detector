<?php
session_start();
include ('session.php');
?>
<?php include ('header.php');?>
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
                  <?php if(!isset($_SESSION['user'])){?>
                    <a href="login.php" class="btn btn-common">Login</a>
                    <?php
                    }
                    else{ echo $_SESSION['user'];?>
                    / <a href="logout.php" class="btn btn-common">Logout</a>
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
if(isset($_GET['agent_id'])){
    $id=$_GET['agent_id'];
    $sqldis="select * from agent where agent_id='$id'";
    $qrydis = mysqli_query($conn , $sqldis);
    $row=mysqli_fetch_assoc($qrydis);
}
?>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-12">
                  <h4>Edit User</h4>
                  <hr>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <form method="POST" action="manage.php">
                      <input type="hidden" name="dis_id" value="<?php echo $row['agent_id'] ; ?>">
                    <div class="form-group row">
                      <label for="name" class="col-4 col-form-label">Name *</label> 
                      <div class="col-8">
                        <input id="name" name="name" value="<?php echo $row['name'] ; ?>" class="form-control here"  type="text" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="username" class="col-4 col-form-label">User Name*</label> 
                      <div class="col-8">
                        <input id="username" name="user" value="<?php echo $row['username'] ; ?>" class="form-control here"  type="text">
                      </div>
                    </div>
                  
                    <div class="form-group row">
                      <label for="newpass" class="col-4 col-form-label">Password *</label> 
                      <div class="col-8">
                        <input id="newpass" name="pwd" value="<?php echo $row['password'] ; ?>" class="form-control here"  type="text" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lastname" class="col-4 col-form-label">Gender *</label> 
                      <div class="col-8">
                          <select name="gender" id="" class="form-control" >
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                          </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                      <label for="text" class="col-4 col-form-label">Date of Birth*</label> 
                      <div class="col-8">
                        <input id="text" name="date" value="<?php echo $row['date'] ; ?>" class="form-control here"  type="date" >
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="email" class="col-4 col-form-label">Email*</label> 
                      <div class="col-8">
                        <input name="email" value="<?php echo $row['email'] ; ?>" class="form-control here"  type="email">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="select" class="col-4 col-form-label">Aadhar Number *</label> 
                      <div class="col-8">
                        <input  name="aadhar" class="form-control here"  value="<?php echo $row['aadhar'] ; ?>" type="text" >                  
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="website" class="col-4 col-form-label">PAN Number * </label> 
                      <div class="col-8">
                        <input name="pan" value="<?php echo $row['pan'] ; ?>"  class="form-control here" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="publicinfo" class="col-4 col-form-label">Address * </label> 
                      <div class="col-8">
                        <textarea name="address" cols="40" rows="4" class="form-control" ><?php echo $row['address'] ; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="website" class="col-4 col-form-label">Phone Number * </label> 
                      <div class="col-8">
                        <input name="phone" value="<?php echo $row['phone'] ; ?>" class="form-control here" type="number">
                      </div>
                    </div>
                  
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="a_update" type="submit" id="submit" class="btn btn-primary">Update User</button>
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
 <?php include('dt.php') ?>
  </body>
</html>
