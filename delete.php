<?php
    include('dbConnection.php');
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id ='$id'";
    if (mysqli_query($conn,$query)) {
    	header("location:index.php");
    }
    else

    {
         echo "error".mysqli_error($conn);
    }
    mysqli_close($conn);

?>