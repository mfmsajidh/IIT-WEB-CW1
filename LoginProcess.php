<?php
   
   session_start();
    $conn = new mysqli("localhost", "root", "");

    mysqli_select_db($conn,"movie_hut");

    // Check connection
     if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
      } 
         
     echo "Connected successfully";


    $email = $_POST["E-mail"];  
    $pass =  $_POST["psw"];
    
    $result = mysqli_query($conn,"SELECT email,password FROM customer WHERE email='$email' ANd password='$pass'");
    $row = mysqli_fetch_array($result,$SQL);

    if ($row["E-mail"]==$email && $row["psw"]==$pass)
    {

    	echo "Validate User";
    }

    else{
    	
    	echo "You are wrong";
    }

?>