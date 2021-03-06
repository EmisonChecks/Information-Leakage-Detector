<?php
session_start();
include ('session.php');
include('../dbconnect.php');
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
    <?php include('inc/navbar.php'); ?>

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
     <!-- Services Section Start -->
     <section  class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="float-right">
              <?php include ('inc/messages.php'); 
              
              if(isset($_SESSION['req'])){?>
<div class="alert alert-warning">
  <?php echo $_SESSION['req'] ?>
</div>
              <?php
            unset($_SESSION['req']);  
            }
              ?>
            </p>
            
            <div class="card-header">
              <h3 class="card-title">Agent Requests</h3>
            </div>
              <!-- /.card-header -->
            <?php
            $me = $_SESSION['agent'];
            $sql = "select * from files where user !='$me' order by file_id desc";
            $qry = mysqli_query($conn , $sql);
            $i = 1;
            
            ?>
            
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Send By</th>  
                    <th>File Name</th>  
                    <th>Action</th>
			            </tr><br>
                </thead>
                <tbody>
                  <?php while($row = mysqli_fetch_array($qry)):?>
                    <tr>
                      <td><?php echo $i ; ?></td>
                      <td><?php echo date('M d ,Y h:i A',strtotime($row['date'])); ?></td>
                      <td><?php echo $row['user']; ?></td>
                      <td><?php echo $row['file_name']; ?></td>
                      <td>
                      <form action="request.php" method="POST">
                          <input type="hidden" name="user" value="<?php echo $_SESSION['agent']; ?>">
                          <input type="hidden" name="file" value="<?php echo $row['file_name']; ?>">
                          <input type="hidden" name="path" value="<?php echo $row['path']; ?>">
                          <input type="hidden" name="key" value="<?php echo $row['secret_key']; ?>">
                          <button type="submit" name="request" class="btn btn-primary btn-flat">Request</button>
                        </form>
                      </td>
                   
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
