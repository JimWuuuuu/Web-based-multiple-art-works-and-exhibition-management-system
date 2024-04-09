<?php

$sname= "localhost";
$unmae= "root";
$password = "123456";

$db_name = "10_lifestyle";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}