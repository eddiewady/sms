<?php 
session_start();

if(!isset($_SESSION['username'])){
	
	header("location:index.php");
}


if(isset($_GET['logout'])){
	session_destroy();
	header("location:index.php");
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h1>Admin | Dashboard</h1>

	<div>
		<h3>
			

		</h3>
	</div>



<?php if(isset($_SESSION['username'])) : ?>
	<h3>Welcome <strong><?php echo $_SESSION['username'];?></strong></h3>
	<button><a href="index.php?logout='1'">Logout</a></button>


<?php endif  ?>


</body>
</html>