<?php

   session_start();
   include("connection.php");
   
   $searchbar = $_POST["search12"];


   $result = mysqli_query($conn,"SELECT * FROM movie where movieName='$searchbar'") or die ("Could not execute query: ".mysqli_error($conn));


   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
   {
     $_SESSION["search12"] = $row;
      
     
      header("location:MovieViewer.php");
   }

?>