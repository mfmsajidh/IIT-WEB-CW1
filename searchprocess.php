<?php
 
     include(connection.php);
     //name="search"
     $searchbar = $_POST["search"];
     
    //select process
     $query = "select movieName from movie where movieName='$searchbar'";
     
     $result = mysqli_query($conn,$query);
     while($row = mysqli_fetch_array($result))
     {
          header("Location:User.php");
     }


?>