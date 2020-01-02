<?php

session_start();

// initialising variable
$username = "";
$email  = "";


$errors = array();
//connect to db

$db = mysqli_connect('localhost','root','','sms') or die("could not connect to database");

//register users

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password= $_POST['password'];
$password2 =$_POST['password2'];
$email =$_POST['email'];
$phone = $_POST['phone'];
$photo = $_FILES['photo']['name'];
$date = $_POST['dob'];

$target = UPLOADPATH.$photo;
move_uploaded_file($_FILES['photo']['tmp_name'],$target);
//form validation
if(empty($username)){array_push($errors,"username is required");}
if(empty($password)){array_push($errors, "password is Required");}	
if(empty($email)){array_push($errors,"email is required");}
if(empty($phone)){array_push($errors, "phone is Required");}
if(empty($photo)){array_push($errors, "photo is Required");}
if(empty($date)){array_push($errors, "date is Required");}
if($password != $password2){array_push($errors,"Password Do not Match");}	

	//check for existing user
	$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";


$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
	if($user['username']== $username){array_push($errors,"username already Exist");}
	if($user['email'] == $email){array_push($errors, "this email id already has a registered username");}
}

//register user if no Error

if(count($errors) == 0){
$query="INSERT INTO users(username,password,email,phone,DoB,photo)VALUES('$username',sha('$password'),'$email','$phone','$date','$photo')";
mysqli_query($db,$query);

$_SESSION['username'] = $username;


 header("location:index.php");
}

}



//login user

if(isset($_POST['login'])){
$username =$_POST['username'];
$password=$_POST['password'];
$role = $_POST['role'];

if(empty($username)){array_push($errors,"username is required");}
if(empty($password)){array_push($errors, "password is Required");}	


  if(count($errors) == 0){

    if($role==="admin"){



$query="SELECT * FROM admin WHERE username='$username' AND password=sha('$password')";
    $results = mysqli_query($db,$query);

    if(mysqli_num_rows($results)){
      $_SESSION['username'] = $username;
         header("location:admin.php");
    }else{
      array_push($errors,"Wrong username  Password or Role");
    }

//end of admin login script


}elseif ($role==="student") {

    $query = "SELECT * FROM students WHERE fname='$username' AND password=sha('$password')";
    $results = mysqli_query($db,$query);

    if(mysqli_num_rows($results)){
       $_SESSION['username']=$username;
     header("location:students.php");
    }else{
      array_push($errors,"Wrong username  Password or Role");
    }
//end of student login script
}elseif ($role === "teacher") {
   $query = "SELECT * FROM staffs WHERE fname='$username' AND pass=sha('$password')";
   $results = mysqli_query($db,$query);

   if(mysqli_num_rows($results)){
   $_SESSION['username']=$username;
 
    header("location:teacher.php");
   }else{
      array_push($errors,"Wrong username  Password or Role");
   }
     
   
     
    }elseif ($role === "parent") {
      
       
  $query = "SELECT * FROM parents WHERE fname='$username' AND password=sha('$password')";
   $results = mysqli_query($db,$query);

   if(mysqli_num_rows($results)){
   $_SESSION['username']=$username;
    header("location:parents.php");
   }else{
      array_push($errors,"Wrong username  Password or Role");
   }




    
    }

    else{
        array_push($errors,"Wrong username  Password or Role");

    }

  	
  }

	  }


    //fetch student Data

  

?>