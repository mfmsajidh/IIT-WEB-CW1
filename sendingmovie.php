<?php

 include("connection.php");

if (isset($_POST['btn1']))
{
   $name = $_POST["fname"];
   $status = $_POST["mstatus"];
   $actor=$_POST["mactor"];
   $actress=$_POST["mactress"];

     	$query = "insert into movie values('','$name','$status','$actor','$actress',null)";

   $result = mysqli_query($conn,$query);

   if(!$result)
   {
   	  die(mysqli_error());
   }

   
   else
   {
   	      echo "Successfully sent to database";
          
   }
}

elseif (isset($_POST['btn2']))
   {
             $movieid = $_POST["mid"];
             $sql = "DELETE FROM  movie WHERE movieId='$movieid'";

            // $result2 = mysqli_query($conn,$query);

             if ($conn->query($sql) === TRUE) {
                    echo "Record deleted successfully";
             }  

        	 else {
             echo "Error deleting record: ". $conn->error;
             }
   

   }

elseif (isset($_POST['btn4']))
   {		
   			 $movieid = $_POST["mid"];
   			 $stat = $_POST["mstatus"];
   			 $sql1 = "UPDATE movie SET status ='$stat' WHERE movieid ='$movieid'";

   			 if ($conn->query($sql1) === TRUE) {
                    echo "Record updated successfully";
                 }           

             else {
                       echo "Error updating record: " . $conn->error;
                   }
     
    }


?>