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
         
         
         
   	      echo "<script type='text/javascript'>alert('Movie submitted successfully!')</script>";
          header("Location:Admin.php");
   }
}

else
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

?>