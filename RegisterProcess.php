<?php
   
    include("connection.php");
    

    $number = rand(100,1000);
    $name = $_POST["fullname"];
    $gender = $_POST["gender"];
    $username = $_POST["username"];
    $email = $_POST["txtemail"];
    $password = $_POST["txtpassword"];
    $no = $_POST["phonenum"];
    $address = $_POST["address"];

    $query = "insert into customer values('$number','$name','$gender','$username','$email','$password','$no','$address')";

    $result = mysqli_query($conn,$query);

   if(!$result)
   {
   	  die(mysqli_error());
   }

   
   else
   {
         
         
         header("Location:Login.php");
         echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
         
   }

?>