<?php  
  session_start();
  require_once('dbconnect.php'); 
    $Task_Name = $_POST['name'];
	$scheds = $_POST['sched'];

	$sql = "INSERT INTO task(taskId, taskInfo, taskDay, taskStatus) VALUES ('','$Task_Name','$scheds','0')";

	if (! $result = mysqli_query($conn, $sql))
	{
		echo "NOT INSERTED";
	}
	else
	{
		echo "INSERTED TO DATABASE";
	}
 
	var_dump($result)
?>