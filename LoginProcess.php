<?php
   
   session_start();

   require("connection.php");

   $email = $_POST['Email'];
   $password = $_POST['Password'];

   $result = mysqli_query($conn, "SELECT * FROM customer where email='$email' AND password='$password'") or die("Could not execute query: " .mysqli_error($conn));

   if($email=='admin@moviehut.com' && $password=='admin'){
    $_SESSION['Email'] = $email;
    header('location:Admin.php');
   }
   elseif (mysqli_num_rows($result)==1) {
    $_SESSION['Email'] = $email;

    $Fresult = mysqli_query($conn, "SELECT * FROM customer where email='$email'");
    $row=mysqli_fetch_assoc($Fresult);

    $_SESSION['FullName'] = $row["fullName"];
    $_SESSION['CustomerId'] = $row["customerId"];

    
    header('location:User.php');
   }
   else{
          
    echo'<script tyope="text/javascript"> 
              window.location.replace("login.php");
              alert("Email or Password is Wrong");
          </script>';
   // header('location:login.php');
  }

?>