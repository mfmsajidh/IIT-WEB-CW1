<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ($_SESSION['Email'] == 'admin@moviehut.com' ) {

} 
else {
    // Redirect them to the login page
    header("Location: User.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin H U T</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="76x76" href="Images/Logo/Favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="Images/Logo/Favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="Images/Logo/Favicon/favicon-16x16.png">
	<link rel="manifest" href="Images/Logo/Favicon/site.webmanifest">
	<link rel="mask-icon" href="Images/Logo/Favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" type="text/css" href="Style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<!-- Navigation Bar -->
	<ul class="navbar">
		<li class="navbar"><a class="navbar active" href="#"><i class="fa fa-video-camera" style="font-size:16px"></i></a></li>
		
		<li class="navbar_logo"><img src="Images/Logo/MovieHut Logo White.png" class="logo" width="40%" height="40%"></li>
		<li class="navbar_right"><a class="navbar" href="LogoutProcess.php"><i class="fa fa-sign-out"></i> Logout</a></li>

		<form name="S_form" id="S_form" method="post" action="searchprocess.php">
			<li class="navbar_right"><input type="text" name="search12" placeholder="&#xf002 Search" class="Search" id="Search"></li>
	    </form>
	</ul>

	<div class="container new_btn" style="height: 100%;">
		<br>
		<h1>Admin Dashboard</h1>
		<p>Insert, Update or Delete Movies</p>
		<br>

		<form method="Post" action="sendingmovie.php" enctype="multipart/form-data">

		<input type="text" id="mid" name="mid" placeholder="Movie ID" >
		<input type="text" id="mname" name="fname" placeholder="Movie Name">
		<input type="text" id="mactor" name="mactor" placeholder="Movie Actor">
		<input type="text" id="mactress" name="mactress" placeholder="Movie Actress">

		<select id="mstatus" name="mstatus">
			<option disabled selected value>Movie Status</option>
      		<option value="Available">Available</option>
      		<option value="Borrowed">Borrowed</option>
    	</select>
		<br>
		<input type="file" id="mimage" name="mimage" class="upload">
		<label for="mimage">Choose Image</label>
		<br>
		<br>
	
	<button name="btn1" style="border:none; background-color:transparent;"><a href="#"><i class="material-icons" style="font-size:36px;color:#2a2a57">library_add</i></a> &nbsp &nbsp &nbsp</button>
	<button name="btn4" style="border:none; background-color:transparent;"><a href="#"><i  class="material-icons" style="font-size:36px;color:#2a2a57">update</i></a> &nbsp &nbsp &nbsp</button>
	<button name="btn2" style="border:none; background-color:transparent;"><a href="#"><i class="material-icons" style="font-size:36px;color:#2a2a57">delete_sweep</i></a></button>
		
		</form>
	
	<hr width="75%">
	</div>

	<div class="container"  style="height: auto;">
		<h1>Our Reservations</h1>
			<br>
			<br>
			<table style="border-collapse: collapse; width: 100%;">
			<tr>
				<th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Movie ID</th>
				<th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Movie Name</th>
				<th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Customer ID</th>
				<th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Customer Name</th>
			</tr>
			<?php include("ReceivingMovie.php") ?>
			</table>
	</div>
	<br>
	<br>
	<br>

	<hr width="90%">

	<div class="container" style="height:25%; top: 0;">
		<h1>Search for a DVD</h1>
		<a href="#Search">Search <i class="fa fa-search" style="font-size:25px;color:#2a2a57"></i></a>
	</div>

	<div class="footer">
	  <p>Copyright 2018 <i class="fa fa-html5"></i> by <i class="fa fa-github"></i> Shakya | Rahal | Nafeel | Shohan | Sajidh</p>
	</div>

</body>
</html>