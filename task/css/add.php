<?php
	
	$con = mysqli_connect('127.0.0.1','root','');

	if(!$con)
	{
		echo "COUDN'T ESTABLISH A CONNECTION TO THE DATABASE";
	}

	if (!mysqli_select_db($con,'todo'))
	{
		echo 'DATABASE NOT SELECTED';
	}

	$Task_Name = $_POST['name'];
	$scheds = $_POST['sched'];

	$sql = "INSERT INTO tasks (Task_Name, scheds) VALUES('$Task_Name', '$scheds')";

	if (!mysqli_query($con, $sql))
	{
		echo "NOT INSERTED";
	}
	else
	{
		echo "INSERTED TO DATABASE";
	}

	header("refresh:20; url=../index.php")
?>