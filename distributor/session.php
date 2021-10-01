<?php
if(!isset($_SESSION['distributor'])){
    header('location:../index.php');
}
else{
    $usern =$_SESSION['distributor'];
    $sqlp="select * from distributor where username = '$usern' ";
    $qryp = mysqli_query($conn , $sqlp);
    $ress = mysqli_fetch_array($qryp);
    
}      

?>