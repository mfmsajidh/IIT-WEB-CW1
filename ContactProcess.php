<?php

	require("connection.php");

	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$message = $_POST["Message"];

	$query = "insert into contact values('','$name','$email','$message')";
	$result = mysqli_query($conn,$query);

	if(!$result)
   {
   	  die(mysqli_error());
   }

   else
   {
        // $message = "Thanks for your Feedback";
       
        echo'<script tyope="text/javascript"> 
              window.location.replace("Contact Us - User.php");
              alert("Thank you for your Feedback we will consider");
          </script>';
        // header("Location:Contact Us - User.php");
         
   }

?>