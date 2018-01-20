<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Task Scheduler</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="bodyshots">
	<div class="list">
		<h1 class="header"> Tasks for today.</h1>
			<ul class="items">
				<li>
					<span class="item">be gwapo</span>
					<a href="#" class="doneclick">Done</a>
				</li>
			</ul>
	
			<form class="item-add" action="css/add.php" method="POST">
				<input type="text" name="name" placeholder="Type a new task here." class="input" autocomplete="off" required>
				<input type="text" name="sched" placeholder="Type schedule." class="input" autocomplete="off" required>
				<input type="submit" value="add task" class="submit">
			</form>

			
	</div>
</body>
</html>