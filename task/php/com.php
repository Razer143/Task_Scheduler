<?php  
  session_start();
  require_once('dbconnect.php'); 
    $Task_Name = $_POST['name'];

	$sql = "UPDATE task SET taskStatus = '1' WHERE taskInfo = '$Task_Name'";

	if (!mysqli_query($conn, $sql))
	{
		echo "NOT DELETE";
	}
	else
	{
		echo "DELETE TO DATABASE";
	}

	header("refresh:.5; url=index.php")
?>