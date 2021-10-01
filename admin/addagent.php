<?php
session_start();
include ('session.php');
include ('header.php');
?>
<html>
  <head>
    <title> Admin </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    .navbar{
      text-align:center;
      font-size:24px;
      background-color : #002366;
      color : white;
      justify-content:center;
    }
  
    #dashboard{
      background-color : #002366;
      color:rgb(157, 197, 229);
    }
    body {
      background-color:rgb(115, 142, 201);
    }
  
    .con {
      left: 0;
      bottom: 0;
      width: 100%;
      color: white;
      text-align: center;
    }
    
    #submit{
      background-color:#002366;
      color:white;
    }
    .footer {
      margin-top:10%;
      left: 0;
      bottom: 0;
      width: 100%;
      color: white;
      text-align: center;
    }
    </style>
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg navbar ">
      <span class="navbar-text">
        Information Leakage Detection
      </span>
    </nav>
    <br><br>
    
    <div class="container">
      <div class="row">
        <div class="col-md-3 ">
          <div class="list-group ">
            <a href="index.php" style = "background-color:#002366;color:white;" class="list-group-item list-group-item-action">Homepage</a>
            <a href="#"  class="list-group-item list-group-item-action active">Add Agent</a>
          </div>
        </div>

        <div class="col-md-9">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <h4>Add Agent</h4>
                  <p class="float-right">
                      <?php if(isset($_SESSION['agent_s'])){?>
                         <p class="text-success float-right"><?php echo $_SESSION['agent_s'];?> <i class="fa fa-check"></i></p> 
                         <?php unset($_SESSION['agent_s']);
                      }
                          elseif(isset($_SESSION['fail'])){?>
                            <p class="text-danger float-right"><?php echo $_SESSION['fail'];?> <i class="fa fa-ban"></i></p> 
                            <?php
                            unset($_SESSION['fail']);
                          }
                          elseif(isset($_SESSION['agent_exist'])){?>
                            <p class="text-danger float-right"><?php echo $_SESSION['agent_exist'];?> <i class="fa fa-ban"></i></p> 
                            <?php
                             unset($_SESSION['agent_exist']);
                          }
                        ?>

                  </p>
                  <hr>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <form method="POST" action="manage.php" class="form-group">
                    <div class="form-group row">
                      <label for="name" class="col-4 col-form-label">Name *</label> 
                      <div class="col-8">
                        <input id="name" name="name" placeholder="First Name" class="form-control here"  type="text"  title="Please enter only alphabet" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="username" class="col-4 col-form-label">User Name*</label> 
                      <div class="col-8">
                        <input id="username" name="user" placeholder="Username" class="form-control here"  type="text"  required>
                      </div>
                    </div>
                  
                    <div class="form-group row">
                      <label for="newpass" class="col-4 col-form-label">Password *</label> 
                      <div class="col-8">
                        <input id="newpass" name="pwd"  class="form-control here"  type="password"  title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number.">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lastname" class="col-4 col-form-label">Gender *</label> 
                      <div class="col-8">
                          <select name="gender" id="" class="form-control" required>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                          </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                      <label for="text" class="col-4 col-form-label">Date of Birth*</label> 
                      <div class="col-8">
                        <input id="text" name="date" class="form-control here"  type="date" required  title="Enter Valid date">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="email" class="col-4 col-form-label">Email*</label> 
                      <div class="col-8">
                        <input id="email" name="email" placeholder="Email" required class="form-control here"  type="email">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="select" class="col-4 col-form-label">Aadhar Number *</label> 
                      <div class="col-8">
                        <input  name="aadhar" class="form-control here" required placeholder="Aadhar" type="text"  title="Enter numerical value only">                  
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="website" class="col-4 col-form-label">PAN Number * </label> 
                      <div class="col-8">
                        <input name="pan" placeholder="PAN"  class="form-control here" type="text" required  title="Enter valid pan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="publicinfo" class="col-4 col-form-label">Address * </label> 
                      <div class="col-8">
                        <textarea name="address" cols="40" rows="4" required class="form-control" ></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="website" class="col-4 col-form-label">Phone Number * </label> 
                      <div class="col-8">
                        <input name="phone" class="form-control here" type="number" required title="Enter 10 digit number only">
                      </div>
                    </div>
                  
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="agent" type="submit" id="agent" class="btn btn-primary">Submit <i class="fa fa-comment-dollar"></i> <i class="fa fa-arrow-right"></i></button>
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

    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3"> <p>  </p>
        <p style="color:black"> © 2021 Copyright: Developed By : Checks </p>
      </div>
    </footer>
  </body>
</html>