<?php
session_start();
$_SESSION['userName']="";
Header('Location:../index.php');
?>