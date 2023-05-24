<?php 
session_start();
if(isset($_POST['leaving']) && 
   isset($_POST['returning'])){

    include "../db_conn.php";

    $leaving = $_POST['leaving'];
    $returning = $_POST['returning'];
    $username = $_SESSION['fname'];
    $data = "fname=".$leaving."&uname=".$returning;
    
    if (empty($leaving)) {
    	$em = "Full name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($returning)){
    	$em = "User name is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else {
      // hashing the password
      
       	$sql = "INSERT INTO rooms(username,entering_date, leaving_date) 
       	        VALUES(?,?,?)";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$username, $leaving, $returning]);

       	header("Location: ../index.php?success=Your leaves are updated");
   	    exit;
      }
}else{
	header("Location: ../index.php?error=error");
	exit;
}
