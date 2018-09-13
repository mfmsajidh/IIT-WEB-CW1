<?php 

session_start();

include("connection.php");

$Movie_ID = $_GET['id'];
$CustomerId = $_SESSION['CustomerId'];

$result = mysqli_query($conn, "UPDATE movie SET status='Borrowed', customerId='$CustomerId', btn_status='Inform Me' WHERE movieId='$Movie_ID'") or die ("Could not execute query: ".mysqli_error($conn));

header("location:Movie - Dynamic.php?id=$Movie_ID");

?>