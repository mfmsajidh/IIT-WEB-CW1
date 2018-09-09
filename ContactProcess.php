<?php

	include("connection.php");

	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$message = $_POST["Message"];

	$query = "insert into contact values('$name','$email','$message')";
	$result = mysqli_query($conn,$query);

	 if(!$result)
   {
   	  die(mysqli_error());
   }

   
   else
   {
         $message = "Thank you for your Feedback";
         echo "<script type='text/javascript'>alert('$message');</script>";
         header("Location:Contact us.php");
         
   }
?>