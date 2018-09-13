<?php

include("Connection.php");

$query = "SELECT customer.customerId, customer.fullName, customer.gender, customer.username, customer.email, customer.contactNo, customer.address, movie.movieId, movie.movieName, movie.actor, movie.actress FROM movie JOIN customer ON movie.customerId = customer.customerId where movie.customerid IS NOT NULL";

$result = mysqli_query($conn,$query) or die ("Could not execute query: ".mysqli_error($conn));

while ($row=mysqli_fetch_assoc($result)){
	$cId = $row["customerId"];
	$cName = $row["fullName"];
	$cGender = $row["gender"];
	$cUser = $row["username"];
	$cEmail = $row["email"];
	$cNumber = $row["contactNo"];
	$cAddress = $row["address"];

	$mId = $row["movieId"];
	$mName = $row["movieName"];
	$mActor = $row["actor"];
	$mActress = $row["actress"];

	?>
	<tr onMouseover="this.style.backgroundColor='#f5f5f5'" onMouseOut="this.style.backgroundColor='White'">
	<td  style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $mId; ?></td>
	<td  style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $mName; ?></td>
	<td  style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $cId; ?></td>
	<td  style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php echo $cName; ?></td>
	</tr>
<?php
};
?>