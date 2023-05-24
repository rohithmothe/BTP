<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-350 p-3 text-center">
    		<img src="upload/<?=$_SESSION['pp']?>"
    		     class="img-fluid rounded-circle">
            <h5 class="display-4 ">Hello, <?php echo $_SESSION['fname'];?></h5>
			<a href="update.php">click  here to change your name</a><br><br>
			<a href="a/index.php">EDIT FIRST TABLE </a><br><br>
			<h2 class="display-4 ">your age is <?=$_SESSION['age']?></h2>
            <a href="logout.php" class="btn btn-warning">
            	Logout
            </a>
		</div>
    </div>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>