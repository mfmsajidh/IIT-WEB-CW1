<?php
 
     include(connection.php);
     //name="search"
     $searchbar = $_POST["search"];
     
    //select process
     $sql = "SELECT movieName FROM movie WHERE movieName = '$searchbar'";
     $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) {
        echo "successful";
    }
}     else {
      echo "0 results";
}


?>