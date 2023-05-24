<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "auth_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	echo "success";
	die("failed to connect!");
}
