<?php
session_start();
include ('../dbconnect.php');
/* login */
if(isset($_POST['login'])){

    $uname = $_POST['user'];
    $pwd = $_POST['pwd'];
    $sql = "select * from users where username='$uname' && password='$pwd'";
    $qry = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($qry);

    if($num == true){
        if(!isset($_SESSION['admin'])){
             $_SESSION['admin'] = $uname;
        }
        header('location:index.php');
    }
    else{
        $_SESSION['fail']= "Invalid Login Details";
     header('location:login.php'); 
    }
    

}
/* agent reg */
if (isset($_POST['agent'])){

    $name =$_POST['name'];
    $useragent=$_POST['user'];
    $emailagent=$_POST['email'];
    $address = $_POST['address'];
    $aadhar = $_POST['aadhar'];
    $pan =  $_POST['pan'];
    $phone = $_POST['phone'];
    $gndrm = $_POST['gender'];
    $date = $_POST['date'];
    $pwd = $_POST['pwd'];

    $sqlagent = "select * from agent where username='$useragent' && phone='$phone'";
    $qry = mysqli_query($conn , $sqlagent);
    $num = mysqli_num_rows($qry);

    if($num >= 1){
        $_SESSION['agent_exist']= "Agent already Registered";
        header('location:addagent.php');
    }
   
    $sqlinsert="INSERT INTO agent (name,username,email,address,aadhar,pan,phone,gender,date,password) values('$name','$useragent',
    '$emailagent','$address','$aadhar','$pan','$phone','$gndrm','$date','$pwd')";
     $qryinsert = mysqli_query($conn , $sqlinsert);

     if($qryinsert == true){

        $_SESSION['agent_s']= "Successfully Registered";
        header('location:addagent.php');
     
     }
     else{
       
    $_SESSION['fail']= "Not Registered";
    header('location:addagent.php');
     }
}
/* agent delete */
if(isset($_GET['agent_id'])){
    $id = $_GET['agent_id'];

    $sql_del = "delete from agent where agent_id='$id'";
    $qry_del = mysqli_query($conn , $sql_del);

    if($qry_del == true){

        $_SESSION['del_s']= "Successfully Deleted";
        header('location:agent.php');
     
     }
     else{
       
    $_SESSION['del_f']= "Not deleted";
    header('location:agent.php');
     }
}

/* Distributor */
if (isset($_POST['distributor'])){

    $name =$_POST['name'];
    $userdistributor=$_POST['user'];
    $emaildistributor=$_POST['email'];
    $address = $_POST['address'];
    $aadhar = $_POST['aadhar'];
    $pan =  $_POST['pan'];
    $phone = $_POST['phone'];
    $gndrm = $_POST['gender'];
    $date = $_POST['date'];
    $pwd = $_POST['pwd'];

    $sqldistributor = "select * from distributor where username='$userdistributor' && phone='$phone'";
    $qry = mysqli_query($conn , $sqldistributor);
    $num = mysqli_num_rows($qry);

    if($num >= 1){
        $_SESSION['distributor_exist']= "distributor already Registered";
        header('location:adddistributor.php');
    }
   
    $sqlinsertd="INSERT INTO distributor (name,username,email,address,aadhar,pan,phone,gender,date,password) values('$name','$userdistributor',
    '$emaildistributor','$address','$aadhar','$pan','$phone','$gndrm','$date','$pwd')";
     $qryinsertd = mysqli_query($conn , $sqlinsertd);

     if($qryinsertd == true){

        $_SESSION['distributor_s']= "Successfully Registered";
        header('location:adddistributor.php');
     
     }
     else{
       
    $_SESSION['fail']= "Not Registered";
    header('location:adddistributor.php');
     }
}
/* distibutor delete */
if(isset($_GET['dis_id'])){
    $id = $_GET['dis_id'];

    $sql_del = "delete from distributor where distributor_id='$id'";
    $qry_del = mysqli_query($conn , $sql_del);

    if($qry_del == true){

        $_SESSION['del_s']= "Successfully Deleted";
        header('location:distributor.php');
     
     }
     else{
       
    $_SESSION['del_f']= "Not deleted";
    header('location:distributor.php');
     }
}

/* update distributor */


if (isset($_POST['d_update'])){
    $disid=$_POST['dis_id'];
    $name =$_POST['name'];
    $userdistributor=$_POST['user'];
    $emaildistributor=$_POST['email'];
    $address = $_POST['address'];
    $aadhar = $_POST['aadhar'];
    $pan =  $_POST['pan'];
    $phone = $_POST['phone'];
    $gndrm = $_POST['gender'];
    $date = $_POST['date'];
    $pwd = $_POST['pwd'];

    $sqlinsertd="UPDATE distributor SET  name='$name' , username='$userdistributor', email='$emaildistributor' , address='$address',aadhar='$aadhar',pan='$pan' , phone='$phone' , gender='$gndrm' , date='$date' ,  password='$pwd'
    where distributor_id='$disid'";
     $qryinsertd = mysqli_query($conn , $sqlinsertd);

     if($qryinsertd == true){

        $_SESSION['distributor_u']= "Successfully Updated";
        header('location:distributor.php');
     
     }
     else{
       
    $_SESSION['fail']= "Not Updated";
    header('location:edit.php');
     }
    }

    /* update distributor */


if (isset($_POST['a_update'])){
    $disid=$_POST['dis_id'];
    $name =$_POST['name'];
    $userdistributor=$_POST['user'];
    $emaildistributor=$_POST['email'];
    $address = $_POST['address'];
    $aadhar = $_POST['aadhar'];
    $pan =  $_POST['pan'];
    $phone = $_POST['phone'];
    $gndrm = $_POST['gender'];
    $date = $_POST['date'];
    $pwd = $_POST['pwd'];

    $sqlinsertd="UPDATE agent SET  name='$name' , username='$userdistributor', email='$emaildistributor' , address='$address',aadhar='$aadhar',pan='$pan' , phone='$phone' , gender='$gndrm' , date='$date' ,  password='$pwd'
    where agent_id='$disid'";
     $qryinsertd = mysqli_query($conn , $sqlinsertd);

     if($qryinsertd == true){

        $_SESSION['distributor_u']= "Successfully Updated";
        header('location:agent.php');
     
     }
     else{
       
    $_SESSION['fail']= "Not Updated";
    header('location:editagent.php');
     }
    }

    /* leaked file */

    if(isset($_POST['leaked'])){
        $user = $_POST['user'];
        $filename = $_POST['file_name'];
        $file = $_FILES['file']['name'];
        $path = "../files/".$file;

        $sql = "Select * from files where file_name='$filename'";
        $qry = mysqli_query($conn , $sql);
        $num = mysqli_num_rows($qry);
        if($num >= 1){
            $_SESSION['file_ex']="File Already Exist";
            header('location:GuiltyAgent.php');
        }
        else{
            $sqlf = "INSERT INTO files (file_name,user,path) Values ('$filename','$user', '$file')";
            $qry = mysqli_query($conn , $sqlf);
            if($qry == true):
                move_uploaded_file($_FILES['file']['tmp_name'],$path);
                $_SESSION['file']="File added successfull";
                header('location:GuiltyAgent.php');
            else:
                $_SESSION['fail']="Error upload Failed";
                header('location:GuiltyAgent.php');
            endif;
        }
    }


    /* file delete */
if(isset($_POST['file_admin_del'])){
    $id = $_POST['dell'];

    $sql_del = "delete from files where file_id='$id'";
    $qry_del = mysqli_query($conn , $sql_del);

    if($qry_del == true){

        $_SESSION['del_s']= "Successfully Deleted";
        header('location:data.php');
     
     }
     else{
       
    $_SESSION['del_f']= "Not deleted";
    header('location:data.php');
     }
}
?>