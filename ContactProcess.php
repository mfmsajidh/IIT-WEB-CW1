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
         echo "<script type='text/javascript'>alert('We recived jdjdjddjdj');</script>";
         header("Location:contact us.php");
         
   }

?>