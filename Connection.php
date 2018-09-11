<?php

    $conn = new mysqli("localhost", "root", "");

    mysqli_select_db($conn,"movie_hut") or die ("Could not execute query: ".mysqli_error($conn));
    
?>