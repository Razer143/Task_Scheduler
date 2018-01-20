<html>
<head>
	<title>DOM</title>

</head>
<link href="../css/css.css" rel="stylesheet">
<body>
  <?php
  session_start();
  require_once('dbconnect.php');
  $connect=mysql_connect('localhost','root','');
  $select=mysql_select_db('task');
  ?>

  <h1 id= "title">Task Scheduler</h1>
    <div class="container">
      <form class="item-add" action="add.php" method="POST">
        <input type="text" name="name" placeholder="Type a new task here." class="input" autocomplete="off" required>
        <input type="text" name="sched" placeholder="Type Day." class="input" autocomplete="off" required>
        <input type="submit" value="add task" class="submit" >
      </form>

      <div id = tasky>
        <h1>Monday Task</h1>
        <ul id="Monday Task">
        <?php
        $connect;
        $select;
        $query = "SELECT * FROM task WHERE taskDay='monday' AND taskStatus='0'";
        $results = mysql_query($query) or die(mysql_error());
        while($result=mysql_fetch_assoc($results)){
          echo '<li>', $result['taskInfo'], '</li>';

        }
        ?>   
        </ul>
        <h1>Tuesday Task</h1>
        <ul id="Tuesday Task"> 
        <?php
        $connect;
        $select;
        $query = "SELECT * FROM task WHERE taskDay = 'tuesday' AND taskStatus = '0'"; 
        $results = mysql_query($query) or die(mysql_error());
        while($result=mysql_fetch_assoc($results)){
          echo '<li>', $result['taskInfo'], '</li>';
        }
        ?>  
        </ul>
        <h1>Wednesday Task</h1>
        <ul id="Wednesday Task"> 
        <?php
        $connect;
        $select;
        $query = "SELECT * FROM task WHERE taskDay = 'wednesday' AND taskStatus = '0'";
        $results = mysql_query($query) or die(mysql_error());
        while($result=mysql_fetch_assoc($results)){
          echo '<li>', $result['taskInfo'], '</li>';
          } 
        ?>   
        </ul>
        <h1>Thursday Task</h1>
        <ul id="Thursday Task">
        <?php
        $connect;
        $select;
        $query = "SELECT * FROM task WHERE taskDay = 'thursday' AND taskStatus = '0'"; 
        $results = mysql_query($query) or die(mysql_error());
        while($result=mysql_fetch_assoc($results)){
         echo '<li>', $result['taskInfo'], '</li>';
        }
        ?>    
        </ul>
        <h1>Friday Task</h1>
        <ul id="Friday Task">
        <?php
        $connect;
        $select;
        $query = "SELECT * FROM task WHERE taskDay = 'friday' AND taskStatus = '0'";
        $results = mysql_query($query) or die(mysql_error());
        while($result=mysql_fetch_assoc($results)){
          echo '<li>', $result['taskInfo'], '</li>';
        }
        ?>  
        </ul>
        <h1>Saturday Task</h1>
        <ul id="Saturday Task">
        <?php
        $connect;
        $select;
        $query = "SELECT * FROM task WHERE taskDay = 'saturday' AND taskStatus = '0'";
        $results = mysql_query($query) or die(mysql_error());
        while($result=mysql_fetch_assoc($results)){
          echo '<li>', $result['taskInfo'], '</li>';
        }
        ?>    
        </ul>
        <h1>Sunday Task</h1>
        <ul id="Sunday Task"> 
        <?php
        $connect;
        $select;
        $query = "SELECT * FROM task WHERE taskDay = 'sunday' AND taskStatus = '0'";
        $results = mysql_query($query) or die(mysql_error());
        while($result=mysql_fetch_assoc($results)){
          echo '<li>', $result['taskInfo'], '</li>';
        }
        ?>
      </div>   
      </ul>
      <h1>Completed</h1>
      <ul id="Completed">
      <?php
      $connect;
      $select;
      $query = "SELECT * FROM task WHERE taskStatus = '1'";
      $results = mysql_query($query) or die(mysql_error());
      while($result=mysql_fetch_assoc($results)){
        echo '<li>', $result['taskInfo'], '</li>';
        }      ?> 
      </ul>
    </div>
    <h1>Complete Task</h1>
    <form class="com-delete" action="com.php" method="POST">
        <input type="text" name="name" placeholder="Type a new task here." class="input" autocomplete="off" required>
        <input type="submit" value="Completed task" class="submit">
      </form>
    <h1>Delete Task</h1>
    <form class="item-delete" action="delete.php" method="POST">
        <input type="text" name="name" placeholder="Type a new task here." class="input" autocomplete="off" required>
        <input type="submit" value="delete task" class="submit">
      </form>


</body>
</html>