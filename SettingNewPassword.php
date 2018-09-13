<?php
   
   include("connection.php");

   $custID = $_POST["custId"];
   $pword = $_POST["Password1"];
   $pword2 = $_POST["Password2"];

   

  // $action = "SELECT customerId FROM customer WHERE customerID = '$custID'";

   if($pword == $pword2)
   {
       $action2 = "UPDATE customer set password = '$pword2' WHERE customerId ='$custID' ";
       $result = mysqli_query($conn,$action2);
       
         if(!$result)
          {
          	die(mysqli_error());
          }
     else
     {
              echo '<script type="text/javascript">

               window.location.replace("login.php");
                alert("You Have Successfully Changed your PAssword");
                 </script>';
                  
        }                 
     }

   else
   {

   	    echo '<script type="text/javascript">

                    window.location.replace("FogotPassword.php");
                alert("The Passwords Doesnt match");
   	             </script>';
   }
  // if(mysqli_num_rows($result)==1)
 //  {

   	   
   //}

?>
