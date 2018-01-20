<?php
	$conn = new mysqli('localhost','root','','task');
	if($conn->connect_errno > 0){
		die('Exiting....');
	}
?>