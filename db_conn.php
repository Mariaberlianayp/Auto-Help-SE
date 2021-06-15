<?php

$sname= "localhost";
$unmae= "maria";
$password = "maria";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}