
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todo app list</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
   include('dbConnection.php');
       $query    = "SELECT * FROM task";
       $result   = mysqli_query($conn,$query);
?>

<div class="container mt-5 bg-dark text-light">
  
	<h1 class="display-4 text-center my-4">Todo application with php and mysql</h1>

<div class="form-group">
  
	<form action="insert.php" method="post" class="mr-10">
	  
		<input class="form-control" type="text" name="task" placeholder="Enter your task" required="1">
		<button class="form-control btn btn-success mt-2" type="submit">
		add task</button>
	</form>
	

</div>

<div>
	<table class="table">
		<thead>
			<tr>
				<th>Number</th>
				<th>Task</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php

	     $i=1;
           while ($row = mysqli_fetch_assoc($result)){
		?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['task'];?></td>
				<td>
					<a href="delete.php?id=<?php echo $row['id'];?>">X</a>
				</td>

			</tr>
			<?php
			$i++;

             }
             mysqli_close($conn);
			?>
		</tbody>
	</table>
</div>	
</div>
	<script src="jquery-slim.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
</body>
</html>
