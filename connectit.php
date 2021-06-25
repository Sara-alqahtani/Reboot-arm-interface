<?php

//Database connection starts here!
$conn = new mysqli('localhost','root','','the_engins');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
}
?>
