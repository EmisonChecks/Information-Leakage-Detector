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
                <a class="nav-link" href="addata.php" color="white">
                  Add Data
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data.php" color="white">
                 Request Data
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mydata.php" color="white">
                 My Data
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedback.php" color="white">
                 Feedback
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recieved.php" color="white">
                 Recieved Data
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