<?php

$servername ="localhost";
$username ="enamul";
$password ="1234";
$db ="student";

$conn = new mysqli($servername,$username,$password,$db);


$first_name = $_REQUEST['firstname'];
$last_name =  $_REQUEST['lastname'];
$email = $_REQUEST['email'];

$sql = "INSERT INTO info (firstname,lastname,email) VALUES ('$first_name','$last_name','$email')";

if ($conn->query($sql)===true) {
	echo "Account created succesfully.";
}else{
	echo "Account creating fail.";
}


?>