<?php

   session_start();

   include("connection.php");
   
   $searchbar = $_POST["search12"];


   $result = mysqli_query($conn,"SELECT * FROM movie where movieName='$searchbar' or actor='$searchbar' or actress='$searchbar'") or die ("Could not execute query: ".mysqli_error($conn));

    $row=mysqli_fetch_assoc($result);

    $movieId = $row["movieId"];
 	
 	header("location:Movie - Dynamic.php?id=$movieId");

?>