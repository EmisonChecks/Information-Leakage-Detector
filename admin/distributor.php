<?php
session_start();
include ('session.php');
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
  <?php include ('header.php'); ?>
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
                    <a href="login.php" class="btn btn-common">Login</a>
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
        <div class="row">
          <div class="col-12">
            <p class="float-right">
              <?php include ('inc/messages.php'); ?>
            </p>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Distributor Details</h3>
              </div>
               <!-- /.card-header -->
              <?php
              $sql = "select * from distributor order by distributor_id desc";
              $qry = mysqli_query($conn , $sql);
              $i = 1;
              ?>
              
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                    <tr>
                      <th>#</th>
                      <th>Name</th>  
                      <th>Gender</th>
                      <th>DOB</th>
                      <th>Email</th>
			                <th>Aadhar</th>
			                <th>Pan</th>
			                <th>Address</th>
			                <th>Phone</th>
			                <th>edit</th>
			                <th>Delete</th>
                    </tr><br>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_array($qry)):?>
                      <tr>
                        <td><?php echo $i ; ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['aadhar'] ?></td>
                        <td><?php echo $row['pan'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><a href="edit.php?dis_id=<?php echo $row['distributor_id'];?>" class="btn btn-primary rounded">Edit</a></td>
                        <td><a href="manage.php?dis_id=<?php echo $row['distributor_id'];?>" class="btn btn-danger rounded">Delete</a></td>
                      </tr>
                      <tr>
                        <?php $i++; endwhile; ?>
                        </tfoot>
                      </table>
                    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
