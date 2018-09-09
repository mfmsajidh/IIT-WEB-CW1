<?php

    include(connection.php);
     //name="search"
     $searchbar = $_POST["search"];
     
      $value = $_POST["search"];

      if(isset($value))
      {
      	 include(connection.php);

      	  $sql = "SELECT movieName FROM movie WHERE moviename LIKE '$value'";
      	  $query = mysqli_query($conn, $sql);

      	  while($row = $query->fetch_array()){

                   header("Location.usr.php");

      	  }
      }

?>