<?php 

session_start();

include("connection.php");

$Movie_ID = $_GET['id'];
$CustomerId = $_SESSION['CustomerId'];

$Fresult = mysqli_query($conn, "SELECT * FROM movie where movieId='$Movie_ID'");

$row=mysqli_fetch_assoc($Fresult);

$btnStat = $row['btn_status'];

if ($btnStat=='Inform Me') {
	echo'<script type="text/javascript"> window.location.replace("User.php"); alert("You will be informed when the Movie is avaialble");</script>';
}
else{
$result = mysqli_query($conn, "UPDATE movie SET status='Borrowed', customerId='$CustomerId', btn_status='Inform Me' WHERE movieId='$Movie_ID'") or die ("Could not execute query: ".mysqli_error($conn));

echo'<script type="text/javascript">window.location.replace("User.php"); alert("You have successfully reserved the Movie");</script>';
}

//header("location:Movie - Dynamic.php?id=$Movie_ID");

?>