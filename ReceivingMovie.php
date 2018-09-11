<?php

include("Connection.php");

$query = "SELECT * FROM movie where customerid IS NOT NULL";

$result = mysqli_query($conn,$query) or die ("Could not execute query: ".mysqli_error($conn));

$row=mysqli_fetch_assoc($result);

$movieId = $row["movieId"];

?>