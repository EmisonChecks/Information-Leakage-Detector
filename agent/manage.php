<?php
session_start();
include ('../dbconnect.php');
/* login */
if(isset($_POST['login'])){

    $uname = $_POST['user'];
    $pwd = $_POST['pwd'];
    $sql = "select * from agent where username='$uname' && password='$pwd'";
    $qry = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($qry);

    if($num == true){
        if(!isset($_SESSION['agent'])){
             $_SESSION['agent'] = $uname;
        }
        header('location:index.php');
    }
    else{
        $_SESSION['fail']= "Wrong Details";
     header('location:login.php'); 
    }
    

}
    /* leaked file */

    if(isset($_POST['leaked'])){
        $user = $_POST['user'];
        $filename = $_POST['file_name'];
        $key = $_POST['key'];
        $file = $_FILES['file']['name'];
        $path = "../files/".$file;

        $sql = "Select * from files where file_name='$filename'";
        $qry = mysqli_query($conn , $sql);
        $num = mysqli_num_rows($qry);
        if($num >= 1){
            $_SESSION['file_ex']="File Already Exist";
            header('location:addata.php');
        }
        else{
            $sqlf = "INSERT INTO files (file_name,user,path,secret_key) Values ('$filename','$user', '$file','$key')";
            $qry = mysqli_query($conn , $sqlf);
            if($qry == true):
                move_uploaded_file($_FILES['file']['tmp_name'],$path);
                $_SESSION['file']="File added successfull";
                header('location:mydata.php');
            else:
                $_SESSION['fail']="Error upload Failed";
                header('location:addata.php');
            endif;
        }
    }

    /* request */
    if(isset($_POST['request'])){
        $user = $_POST['user'];
        $fname = $_POST['fname'];
        $description = $_POST['description'];
        $dis = $_POST['dis'];
        $dept = $_POST['dept'];
        $path = $_POST['path'];
        $key = $_POST['key'];
        $location = $_POST['location'];
        $action = 0;
        $sqlview= "select * from request where user='$user' && file_name='$fname'";
        $qryview = mysqli_query($conn , $sqlview);
          $numm = mysqli_num_rows($qryview);
     if($numm >=1){
         $_SESSION['req']="already requested";
         header('location:data.php');
     }
     else{

        $sqlf = "INSERT INTO request (file_name,user,description,distributor,department,action,path,secret_key,location) Values ('$fname','$user', '$description','$dis','$dept','$action','$path','$key','$location')";
        
            $qry = mysqli_query($conn , $sqlf);
            if($qry == true):
               
                $_SESSION['request']="Request added successfull";
                header('location:feedback.php');
            else:
                $_SESSION['fail']="Error upload Failed";
                header('location:request.php');
            endif;
        }
    
    }

    /* data delete */
if(isset($_GET['file_id'])){
    $id = $_GET['file_id'];

    $sql_del = "delete from files where file_id='$id'";
    $qry_del = mysqli_query($conn , $sql_del);

    if($qry_del == true){

        $_SESSION['del_s']= "Successfully Deleted";
        header('location:mydata.php');
     
     }
     else{
       
    $_SESSION['del_f']= "Not deleted";
    header('location:mydata.php');
     }
}

    /* Request delete */
if(isset($_POST['del_request'])){
    $id = $_POST['id'];

    $sql_del = "delete from request where request_id='$id'";
    $qry_del = mysqli_query($conn , $sql_del);

    if($qry_del == true){

        $_SESSION['del_s']= "Successfully Deleted";
        header('location:feedback.php');
     
     }
     else{
       
    $_SESSION['del_f']= "Not deleted";
    header('location:feedback.php');
     }
}

/* download */
if(isset($_POST['download'])){
    $id = $_POST['id'];
    $path = basename($_POST['path']);
    $file = $_POST['file'];
    $key = $_POST['key'];


    $sql = "select * from request where secret_key='$key' && file_name='$file'";
    $qry = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($qry);
    if($num >=1){
            $filepath='../files'.$path; 

            if(!empty($path) && file_exists($filepath)){
                header("Cache-control:public");
                header("Content-Description:File Transfare");
                header("Content-Dipostion:attachment; filename=$path");
                header("Content-Type:application/zip");
                header("Content-Transfare-Emcoding:binary");

                readfile($filepath);
                exit;
            }
           
    }
}
?>