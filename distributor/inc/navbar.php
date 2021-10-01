
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
                <a class="nav-link" href="#">
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
              <?php if(!isset($_SESSION['distributor'])){?>
              <li class="nav-item">
                <a class="nav-link" href="login.php" color="white">
                  Login
                </a>
              </li>
                    <?php
                    }
                    else{?>
                    
              <li class="nav-item">
                <a class="nav-link" href="request.php" color="white">
                  <span class="badge badge-danger">12</span> Request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addata.php" color="white">
                  Add Data
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mydata.php" color="white">
                  My Data
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
                <h2 class="head-title wow fadeInUp mt-5">Cloud Computing Information Leakage Agent Detection</h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <?php if(!isset($_SESSION['distributor'])){?>
                    <a href="login.php" class="btn btn-common">Login</a>
                    <?php
                    }
                    else{ echo $_SESSION['distributor'];?>
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
