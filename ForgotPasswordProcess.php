<?php
 // session_start();   
 
include("connection.php");
$no = $_POST["txt111"];
$sql =" SELECT contactNo FROM customer WHERE contactNo ='$no' ";

$result = mysqli_query($conn,$sql);

//$number = rand(1,1000);

 if(isset($_POST["phonesub"]))
 {  
         
      if(mysqli_num_rows($result)==1)
      {
          // $_SESSION('number')=$number;
          require('Textlocal.class.php');
 
          $Textlocal = new Textlocal(false, false, 'xWBWoZwoFwg-PRb8RjftiDZbRbn4LvVaEilrDbM3Lc');
            
          $numbers = array($no);
          $sender = 'Movie Hut';
          $message = "Your OTP code is  10102345   Please use this to change your password" ;
 
          $response = $Textlocal->sendSms($numbers, $message, $sender);

           echo "<script type='text/javascript'>
             alert('You will receive a message Shorty');
             window.location.replace('Otp.php');
           
           </script>";
       }

       else{

       	     echo "<script type='text/javascript'>
             alert('Your Phone number is not Available in the DATABASE');
             window.location.replace('Otp.php');
           
           </script>";
       }

}


 else
{
   
   $otpno =  10102345 ;
    //$_POST["txt222"];

    if($otpno == $_POST["txt222"] )
    {
    	 header("Location:FogotPassword.php");
    	 
    }

    else
    {
    	 
    	 echo '<script type="text/javascript">
             alert("Enter the Proper OTP CODE");
             window.location.replace("Otp.php");
           
           </script>';
    }
}

?>



