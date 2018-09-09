<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['Email'] ) ) {
    // Grab user data from the database using the email
    // Let them access the "logged in only" pages
} 
else {
    // Redirect them to the login page
    header("Location: Login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Movie H U T</title>
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
</head>
<body>

	<!-- Navigation Bar -->
	<ul class="navbar">
		<li class="navbar"><a class="navbar active" href="User.php"><i class="fa fa-video-camera" style="font-size:16px"></i></a></li>
		<li class="navbar dropdown">
			<a href="javascript:void(0)" class="dropbtn">Movies</a>
			<div class="dropdown-content">
				<a href="User.php#Reserve">Reserve Now</a>
				<a href="User.php#IMG_Gallery">Motion Gallery</a>
				<a href="User.php#Upcomings">Upcomings</a>
			</div>
		</li>
		<li class="navbar"><a class="navbar" href="Contact Us - User.php">Contact Us</a></li>
		<li class="navbar_logo"><img src="Images/Logo/MovieHut Logo White.png" class="logo" width="40%" height="40%"></li>
		<li class="navbar_right"><a class="navbar" href="LogoutProcess.php">Logout</a></li>
		<li class="navbar_right"><input type="text" name="search" placeholder="&#xf002 Search" class="Search"></li>
	</ul>

	<img src="Images/Background/Alien.jpg" width="100%" height="100%">
	<div class="container" style="height: 75%;">

		<br>
		<br>

		<form method="post" action="ReserveProcess.php">
			<h1 id="12">The Alien</h1>
			<p><i class="fa fa-info-circle" style="font-size:30px;color:#2a2a57"></i> Available</p>
			<br>
			<p><i class="fa fa-male" style="font-size:30px;color:#2a2a57"></i> Michael Fassbender</p>
			<p><i class="fa fa-female" style="font-size:30px;color:#2a2a57"></i> Katherine Waterston</p>
			<br>
			<a href="ReserveProcess.php">Reserve Now <i class="fa fa-wheelchair-alt" style="font-size:25px;color:#2a2a57"></i></a>
		</form>

	</div>
	
	<div class="footer">
	  <p>Copyright 2018 <i class="fa fa-html5"></i> by <i class="fa fa-github"></i> Shakya | Rahal | Nafeel | Shohan | Sajidh</p>
	</div>

</body>
</html>
