<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$fname = $_POST['fname'];
		$id = $_SESSION['id'];
        if(!empty($fname))
		{
			$query = "update users set fname ='$fname' where id='$id'";
			mysqli_query($con, $query);
			 echo "valid"; 
			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: darkblue;
		border: none;
	}

	#box{

		background-color:darkorange;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
		    <h5 class="display-4 ">Hello, <?php echo $_SESSION['id'];?></h5>
			<div style="font-size: 20px;margin: 10px;color: white;">Update</div>

			<div style="font-size: 20px;margin: 10px;color: white;">Full Name</div>
			<input id="text" type="text" name="fname"><br><br>

			<input id="button" type="submit" value="update">
			
			
			<a href="signup.php">Click to signup</a>
		</form>
	</div>
</body>
</html>