<?php
 // session_start();   

$number = rand(1,1000);

 if(isset($_POST["phonesub"]))
 {  
  

   $no = $_POST["txt111"];
   
  // $_SESSION('number')=$number;
  

          require('Textlocal.class.php');
 
          $Textlocal = new Textlocal(false, false, 'LbAkl2aUwcI-Qg4Snbq7PKHiTdKepg4G39l9glLFAk');
            
          $numbers = array($no);
          $sender = 'Movie Hut';
          $message = "Your OTP code is  ".$number."   Please use this to change your password" ;
 
          $response = $Textlocal->sendSms($numbers, $message, $sender);

           echo "<script type='text/javascript'>
             alert('You will receive a message Shorty');
             window.location.replace('Otp.php');
           
           </script>";

}


 else
{
   
    $otpno = $_POST["txt222"];
    if($number == $otpno)
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



