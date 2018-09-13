<?php

   session_start();

   include("connection.php");
   
   $searchbar = $_POST["search12"];


   $result = mysqli_query($conn,"SELECT * FROM movie where movieName='$searchbar' or actor='$searchbar' or actress='$searchbar'") or die ("Could not execute query: ".mysqli_error($conn));

    $row=mysqli_fetch_assoc($result);

    $movieId = $row["movieId"];

    if ($_SESSION['Email'] == 'admin@moviehut.com' ) {

    	header("location:Movie - Dynamic - Admin.php?id=$movieId");
    } 
    else {
    	header("location:Movie - Dynamic.php?id=$movieId");
}

?>