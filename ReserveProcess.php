<?php 

session_start();

include("connection.php");

$id= $_GET['id'];

$CustomerId = $_SESSION['CustomerId'];
$Movie_ID = $id;

$result = mysqli_query($conn, "UPDATE movie SET customerId='$CustomerId' WHERE movieId='$Movie_ID'") or die ("Could not execute query: ".mysqli_error($conn));

?>