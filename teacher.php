<?php 
session_start();

if(!isset($_SESSION['username'])){
    header("location:index.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    header("location:index.php");
} 

include 'teacherHeader.php';
include 'teacherSiderBar.php';
   include 'teacherProfile.php';       
 include 'footer.php';
 ?>