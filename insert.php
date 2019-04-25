<?php
 include('dbConnection.php');
     
     $task  = $_POST['task'];

     $query = "INSERT INTO task(task) 
     VALUES ('$task')";

     if(mysqli_query($conn,$query)) {

      header("location: index.php");

     	
     }else
     {
     	echo "error";
     }
     mysqli_close($conn);

?>