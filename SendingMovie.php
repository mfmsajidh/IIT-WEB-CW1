<?php

include("connection.php");

if (isset($_POST['btn1']))
{
   $name = $_POST["fname"];
   $status = $_POST["mstatus"];
   $actor=$_POST["mactor"];
   $actress=$_POST["mactress"];

   $upload_image=$_FILES["mimage"]["name"];
   $folder="Images/Background/";
   move_uploaded_file($_FILES["mimage"]["tmp_name"], "$folder".$_FILES["mimage"]["name"]);
   
  /*
   $insert_path="INSERT INTO image_table VALUES('$folder','$upload_image')";
   $var=mysql_query($insert_path);
  */
   $image_loc_name = $folder.$upload_image;

   $query = "INSERT INTO movie values('','$name','$status','$actor','$actress','$image_loc_name',null)";

   $result = mysqli_query($conn,$query) or die ("Could not execute query: ".mysqli_error($conn));

  echo "Successfully Inserted New Record";
  echo "<script>setTimeout(\"location.href = 'Admin.php';\",1000);</script>";

}

elseif (isset($_POST['btn2']))
   {
             $movieid = $_POST["mid"];
             $sql = "DELETE FROM  movie WHERE movieId='$movieid'";

            // $result2 = mysqli_query($conn,$query);

             if ($conn->query($sql) === TRUE) {
                    echo "Successfully deleted record";
                    echo "<script>setTimeout(\"location.href = 'Admin.php';\",1000);</script>";
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
                    echo "Successfully Updated Record";
                    echo "<script>setTimeout(\"location.href = 'Admin.php';\",1000);</script>";
                 }           

             else {
                       echo "Error updating record: " . $conn->error;
                   }
     
    }


?>
