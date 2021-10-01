<?php
session_start();
include ('../dbconnect.php');
/* login */
if(isset($_POST['login'])){

    $uname = $_POST['user'];
    $pwd = $_POST['pwd'];
    $sql = "select * from distributor where username='$uname' && password='$pwd'";
    $qry = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($qry);

    if($num == true){
        if(!isset($_SESSION['distributor'])){
             $_SESSION['distributor'] = $uname;
        }
        header('location:index.php');
    }
    else{
        $_SESSION['fail']= "Wrong Details";
     header('location:login.php'); 
    }
    

}
/* accept request */
if(isset($_POST['accept'])){
    $id_accept=$_POST['re_id'];
    $act =1;
    $sqlac = "UPDATE request SET action='$act' where request_id='$id_accept'";
    $qryac= mysqli_query($conn , $sqlac);
    if($qryac == true):
        header('location:accepted.php');
    else:
        header('location:request.php');
    endif;
}

/* denie request */
if(isset($_POST['denie'])){
    $id_accept=$_POST['de_id'];
    $act =2;
    $sqlac = "UPDATE request SET action='$act' where request_id='$id_accept'";
    $qryac= mysqli_query($conn , $sqlac);
    if($qryac == true):
        header('location:denied.php');
    else:
        header('location:request.php');
    endif;
}

  /* request */
  if(isset($_POST['share'])){
    $user = $_POST['user'];
    $fname = $_POST['fname'];
    $agent = $_POST['agent'];
    $path = $_POST['path'];
    $location =$_POST['location'];

    $sqlview= "select * from share where agent='$user' && file_name='$fname'";
    $qryview = mysqli_query($conn , $sqlview);
      $numm = mysqli_num_rows($qryview);

 if($numm >=1){
     $_SESSION['req']="This data has already shared ";
     header('location:data.php');
 }
 else{

    $sqlf = "INSERT INTO share (file_name,user,agent,path,location) Values ('$fname','$user','$agent','$path','$location')";
    
        $qry = mysqli_query($conn , $sqlf);
        if($qry == true):
           
            $_SESSION['request']="File Shared successfull";
            header('location:data.php');
        else:
            $_SESSION['fail']="File sharing Failed";
            header('location:share.php');
        endif;
    }

}
?>