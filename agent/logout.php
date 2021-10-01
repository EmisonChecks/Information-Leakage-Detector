<?php
   // Session Start
   session_start();
   unset($_SESSION["agent"]);
   header('location:../index.php');
?>