<?php

include("connection.php");

$name = $_POST("fname");
$status = $_POST("Available");
$actor=$_POST("mactor");
$actress=$_POST("mactress");

$query = "insert into movie values('','$name','$status','$actor','$actress','')";

    $result = mysqli_query($conn,$query);

   if(!$result)
   {
   	  die(mysqli_error());
   }

   
   else
   {
         
         
         //header("Location:Login.php");
         echo "<script type='text/javascript'>alert('Movie submitted successfully!')</script>";
         
   }

?>