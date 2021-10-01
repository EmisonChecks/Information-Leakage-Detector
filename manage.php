<?php
session_start();
include ('dbconnect.php');

if(isset($_POST['login'])){

    $uname = $_POST['user'];
    $pwd = $_POST['pwd'];
    $sql = "select * from users where username='$uname' && password='$pwd'";
    $qry = mysqli_query($conn , $sql);

    if($qry == true){
        if(!isset($_SESSION['user'])){
             $_SESSION['user'] = $uname;
        }
        header('location:index.php');
    }
    $_SESSION['fail']= "Wrong Details";
    header('location:index.php');

}

?>