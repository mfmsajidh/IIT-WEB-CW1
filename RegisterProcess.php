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
         
         require('Textlocal.class.php');
 
          $Textlocal = new Textlocal(false, false, 'LbAkl2aUwcI-Qg4Snbq7PKHiTdKepg4G39l9glLFAk');
            
          $numbers = array($no);
          $sender = 'Movie Hut';
          $message = "Welcome to movie hut. Now you can reserve latest movies from us.";
 
          $response = $Textlocal->sendSms($numbers, $message, $sender);

          header("Location:Login.php");
          echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
         
   }

?>