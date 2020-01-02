
<?php 
session_start();

if(!isset($_SESSION['username'])){
    
    header("location:index.php");
}


if(isset($_GET['logout'])){
    session_destroy();
    header("location:index.php");
} 



     include 'includes/upper.php';
    include 'includes/dashboard.php';
    include  'includes/downer.php';



    

   
?>