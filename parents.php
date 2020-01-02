<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location:index.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    header("location:index.php");
} 

include 'parentHeader.php';
include 'parentSideBar.php';
include 'parentProfile.php';
include 'footer.php';
?>