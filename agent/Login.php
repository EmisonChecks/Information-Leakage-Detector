<?php session_start(); ?>
<html>
<head>
<title> Login </title>
<link rel="stylesheet" href="../assets/css/login_css.css">
<script src="login_js.js"> </script> 
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}
#do_login{
	color: white;
	background : black;
}
.text-danger{
  color: red;
  font-weight:20px;
}
</style> 
</head>

<body>
<form action ="manage.php" method="POST">
<div class='box'>
  <div class='box-form'>
    <div class='box-login-tab'></div>
    <div class='box-login-title'>
      <div class='i i-login'></div><h2>LOGIN</h2></div>
      <div class='box-login'>
        <?php if(isset($_SESSION['fail'])){ ?>
                            <p class="text-danger float-right"><?php echo $_SESSION['fail'];?> <i class="fa fa-ban"></i></p> 
                            <?php
                            unset($_SESSION['fail']);
                          }
                          ?>
        <div class='fieldset-body' id='login_form'>
          <!--<button onclick="openLoginInfo();" class='b b-form i i-more' title='Mais Informações'></button>
        	-->
          <p class='field'>
            <label for='user'>USERNAME</label>
            <input type='text' id='user' name='user' title='Username' />
            <span id='valida' class='i i-warning'></span>
          </p>
          
          
          <p class='field'>
            <label for='pass'>PASSWORD</label>
            <input type='password' id='pass' name='pwd' title='Password' />
            <span id='valida' class='i i-close'></span>
          </p>
          
          <input type='submit' name = "login" id='do_login' value='GET STARTED' title='Get Started' />
        </div>
      </div>
    </div>
    <div class='box-info'>

    </p>
    <div class='line-wh'></div>
    <button onclick="" class='b-cta' title='Sign up now!'> CREATE ACCOUNT</button>
  </div>
</div>

 </form>
  <div class="footer">
 <p style="color:white">Developed By :- Checks </p>
</div>
 </body>
 </html> 