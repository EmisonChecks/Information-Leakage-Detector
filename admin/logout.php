<?php
   // Session Start
   session_start();
   unset($_SESSION["user"]);
   header('location:../index.php');
?>