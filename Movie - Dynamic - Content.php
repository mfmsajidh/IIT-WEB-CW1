<?php

include("Connection.php");

$query = "SELECT * FROM movie";

$result = mysqli_query($conn,$query) or die ("Could not execute query: ".mysqli_error($conn));

while ($row=mysqli_fetch_assoc($result)){

	$mId = $row["movieId"];
	$mName = $row["movieName"];
	$mLocation = $row["Image"];

	?>
	<div class="gallery">
		<a href="Movie - Dynamic.php?id=<?php echo $mId; ?>">
			<img src="<?php echo $mLocation; ?>" alt="<?php echo $mName; ?>" width="300" height="200">
		</a>
		<div class="desc""><?php echo $mName; ?></div>
	</div>
<?php
};
?>