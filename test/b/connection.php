<?php

$dbhost = "db";
$dbuser = "root";
$dbpass = "password";
$dbname = "auth_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	echo "success";
	die("failed to connect!");
}
