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
    header('location:User.php');
   }
   else{
    header('location:login.php');
  }

 /*  if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['Email'] ) && isset( $_POST['psw'] ) ) {
        // Getting submitted user data from database
        $con = new mysqli("localhost", "root", "", "movie_hut");
        $stmt = $con->prepare("SELECT * FROM customer WHERE email = ?");
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $result = $stmt->get_result();
      $user = $result->fetch_object();
        
      // Verify user password and set $_SESSION
      if ( password_verify( $_POST['psw'], $user->password ) ) {
        $_SESSION['customerId'] = $user->ID;
      }
    }
}

*/

/*
 $conn = new mysqli("localhost", "root", "");

    mysqli_select_db($conn,"movie_hut");

    // Check connection
     if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
      } 
         
     echo "Connected successfully";


    $email = $_POST["Email"];  
    $pass =  $_POST["psw"];
    
    $result = mysqli_query($conn,"SELECT email,password FROM customer WHERE email='$email' ANd password='$pass'");
    $row = mysqli_fetch_array($result);

    if ($row["E-mail"]==$email && $row["psw"]==$pass)
    {

      echo "Validate User";
    }

    else{
      
      echo "You are wrong";
    }

    */

?>