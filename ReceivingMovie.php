<?php

include("Connection.php");

$query = "SELECT customer.customerId, customer.fullName, customer.gender, customer.username, customer.email, customer.contactNo, customer.address, movie.movieId, movie.movieName, movie.actor, movie.actress FROM movie JOIN customer ON movie.customerId = customer.customerId where movie.customerid IS NOT NULL";

$result = mysqli_query($conn,$query) or die ("Could not execute query: ".mysqli_error($conn));

$row=mysqli_fetch_assoc($result);

$cId = row["customerId"];
$cName = row["fullName"];
$cGender = row["gender"];
$cUser = row["username"];
$cEmail = row["email"];
$cNumber = row["contactNo"];
$cAddress = row["address"];

$mId1 = $row["movieId"];
$mName1 = $row["movieName"];
$mActor1 = $row["Actor"];
$mActress1 = $row["Actress"];

?>