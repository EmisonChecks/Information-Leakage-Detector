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
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#Modules" color="white">
                  Modules
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#Technology" color="white">
                  Technology used
                </a>
              </li>
              <?php if(!isset($_SESSION['admin'])){?>
              <li class="nav-item">
                <a class="nav-link" href="login.php" color="white">
                  Login
                </a>
              </li>
                    <?php
                    }
                    else{?>
              <li class="nav-item">
                <a class="nav-link" href="data.php" color="white">
                  Data
                </a>
              </li>
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
             
              <li class="nav-item">
                <a class="nav-link" href="leaker.php" color="white">
                 Leaker
                </a>
              </li>
               <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
                MORE
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
            <span class="dropdown-header">Add More</span>
            <div class="dropdown-divider"></div>
            <a href="addagent.php" class="dropdown-item">
              <i class="fas fa-user-plus mr-2"></i> New Agent
              <span class="float-right text-muted text-sm"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="adddistributor.php" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> New Distributor
              <span class="float-right text-muted text-sm"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item">
              <i class="fas fa-power-off mr-2 text-danger"></i> Logout
              <span class="float-right text-muted text-sm"></span>
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
      <style>
         .dropdown-menu .dropdown-item:hover{
              background: #002366;
          }
      </style>