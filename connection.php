<?php

    $conn = new mysqli("localhost", "root", "");

    mysqli_select_db($conn,"movie_hut");

    // Check connection
     if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
      } 
         
     echo "Successfully Connected to the Official Movie HUT Database";

?>