<?php
include 'server.php';
include_once 'errors.php';
?>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:54:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DitSchool| Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content" style="height: auto !important; padding-top: 5px !important;">
            <div class="login-box">
             
                <form action="register.php"  method="POST" class="login-form" >
              
                    <div class="form-group">
 <? php include_once 'errors.php'?>
                               <label>username </label>
                <input type="text" name="username" placeholder="Enter usrename" class="form-control" required="">
                      
                        <label>Password</label>
                   <input type="password" name="password" placeholder="Enter password" class="form-control" required="">
                      
                        <label> Confirm Password</label>
                   <input type="Password" name="password2" placeholder="Retype password" class="form-control" required="">
                   <label>Email Address</label>
                   <input type="text" name="email" placeholder="Enter email" class="form-control" required="">
                    
                           <label>Phone</label>
                   <input type="text" name="phone" placeholder="Enter Phone NO" class="form-control" required="">
                        <label>Date of Birth</label>
                   <input type="Date" name="dob"  class="form-control" required="">
                    <label>Photo</label>
                   <input type="file" name="photo" placeholder="Enter password" class="form-control" required="">
                      <input type="submit"  name="submit"  class="login-btn" value="Register" style="margin-bottom: 50px !important;">
                    </div>
                    
                </form>
             
            </div>
            <div class="sign-up">Do you have an account ? <a href="login.php">Login!</a></div>
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:54:30 GMT -->
</html>