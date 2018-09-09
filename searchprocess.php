<?php
 
<<<<<<< HEAD
=======
    include(connection.php);
     //name="search"
     $searchbar = $_POST["search"];
>>>>>>> 4d5467ced5396676db3a8079a804148d5fdfff80
     
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