<?php 
session_start();

if(!isset($_SESSION['username'])){

	   header("location:index.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    header("location:index.php");
} 

include'header.php';
     
  include'sidebar.php';
         
include'mainbody.php';
                
 include 'footer.php';

?>