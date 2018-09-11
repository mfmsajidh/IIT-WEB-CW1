<?php
 // session_start();   

 if(isset($POST["phonesub"]))
 {  
  

   $no = $_POST("txt1");
   $number = rand(1,1000000);
  // $_SESSION('number')=$number;
  

          require('Textlocal.class.php');
 
          $Textlocal = new Textlocal(false, false, 'LbAkl2aUwcI-Qg4Snbq7PKHiTdKepg4G39l9glLFAk');
            
          $numbers = array($no);
          $sender = 'Movie Hut';
          $message = "Your OTP code is  ".$number+"   Please use this to change your password" ;
 
          $response = $Textlocal->sendSms($numbers, $message, $sender);

           echo "<script type='text/javascript'>
             alert('You will receive a message Shorty');
             window.location.replace('Otp.php');
           
           </script>";
}

 if(isset($POST["otpsub"]))
{
   
    $otpno = $_POST["txt2"];
    if($otpno == $number)
    {
    	 header("location:FogotPassword.php");
    }
}
?>



