<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( empty( $_SESSION['Email'] ) ) {

} 
else {
    
    header("Location: User.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login H U T</title>
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
<body id="bodysignin">

  <!-- Navigation Bar -->
  <ul class="navbar">
    <li class="navbar"><a class="navbar active" href="Index.php"><i class="fa fa-video-camera" style="font-size:16px"></i></a></li>
    <li class="navbar dropdown">
      <a href="javascript:void(0)" class="dropbtn">Movies</a>
      <div class="dropdown-content">
        <a href="Index.php#Reserve">Reserve Now</a>
        <a href="Index.php#IMG_Gallery">Motion Gallery</a>
        <a href="Index.php#Upcomings">Upcomings</a>
      </div>
    </li>
    <li class="navbar"><a class="navbar" href="Contact Us.php">Contact Us</a></li>
    <li class="navbar_logo"><img src="Images/Logo/MovieHut Logo White.png" class="logo" width="40%" height="40%"></li>
		<li class="navbar_right"><a class="navbar" href="Login.php"><i class="fa fa-sign-in"></i> Login</a></li>
		<li class="navbar_right"><a class="navbar" href="Register.php"><i class="fa fa-edit"></i> Register</a></li>
  </ul>
         

			<div>
				<div class="table1 new_btn">
					<h1 align="center" class="head1"> Log In </h1>

						<form method="post" action="LoginProcess.php">
						<input class ="text1" type="email" placeholder="Email" name="Email" required>
						<br></br>
						<input class ="text1" type="password" placeholder="Password" name="Password" required>
						<br></br>
						<button class="Sign1" type ="submit"> Sign In </button>
												<br></br>
						<p align="center" class="pf1"> Forgot Your Password? <a href="Otp.php" class="click"> Click Here! </a></p>
				
				</div>
			</div>

	<div class="footer" style="position: fixed; bottom: 0;">
	  <p>Copyright 2018 <i class="fa fa-html5"></i> by <i class="fa fa-github"></i> Shakya | Rahal | Nafeel | Shohan | Sajidh</p>
	</div>
			
</body>