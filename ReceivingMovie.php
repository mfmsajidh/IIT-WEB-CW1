<?php

include("Connection.php");

$query = "SELECT customer.customerId, customer.fullName, customer.gender, customer.username, customer.email, customer.contactNo, customer.address, movie.movieId, movie.movieName, movie.actor, movie.actress FROM movie JOIN customer ON movie.customerId = customer.customerId where movie.customerid IS NOT NULL";

$result = mysqli_query($conn,$query) or die ("Could not execute query: ".mysqli_error($conn));

$row=mysqli_fetch_assoc($result);

echo count($row);

$row=mysqli_fetch_assoc($result);

 while ($row=mysqli_fetch_row($result))
   {

   	$cId = $row[0,"customerId"];
	$cName = $row[0,"fullName"];
	$cGender = $row[0,"gender"];
	$cUser = $row["username"];
	$cEmail = $row["email"];
	$cNumber = $row["contactNo"];
	$cAddress = $row["address"];

	$mId1 = $row["movieId"];
	$mName1 = $row["movieName"];
	$mActor1 = $row["actor"];
	$mActress1 = $row["actress"]; 

    printf ("%s (%s)\n",$row[0],$row[1]);
    }

/*
$cId = $row["customerId"];
$cName = $row["fullName"];
$cGender = $row["gender"];
$cUser = $row["username"];
$cEmail = $row["email"];
$cNumber = $row["contactNo"];
$cAddress = $row["address"];

$mId1 = $row["movieId"];
$mName1 = $row["movieName"];
$mActor1 = $row["actor"];
$mActress1 = $row["actress"];
*/
?>