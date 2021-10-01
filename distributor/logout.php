<?php
   // Session Start
   session_start();
   unset($_SESSION["distributor"]);
   header('location:../index.php');
?>