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
 
          $Textlocal = new Textlocal(false, false, 'xWBWoZwoFwg-PRb8RjftiDZbRbn4LvVaEilrDbM3Lc');
            
          $numbers = array($no);
          $sender = 'Movie Hut';
          $message = "Welcome to movie hut. Now you can reserve latest movies from us \n****PLEASE REMEBER YOUR ID YOU WILL NEED IT IF YOU FORGOT YOUR PASSWORD**** \nYour ID is  ".$number ;
 
          $response = $Textlocal->sendSms($numbers, $message, $sender);

         // header("Location:Login.php");
           echo'<script tyope="text/javascript"> 
              window.location.replace("login.php");
              alert("WELCOME TO MOVIE HUT YOU HAVE BEEN REGISTERED SUCCESSFULLY \n YOU WILL RECIEVE AN MESSAGE SHORTLY");
          </script>';
         
   }

?>