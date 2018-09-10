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

	<div class="container new_btn"  style="height: 100%;">
		<h1>Our Reservations</h1>

		<div class="container">
			<p>Customer</p>
			<form class="new_btn">

			<input type="text" id="cid" name="cid" placeholder="Customer ID" disabled style="width:75%;">
			<input type="text" id="cuser" name="cuser" placeholder="Customer Username" disabled style="width:75%;">
			<input type="text" id="cname" name="cname" placeholder="Customer Name" disabled style="width:75%;">
			<input type="text" id="cgender" name="cgender" placeholder="Customer Gender" disabled style="width:75%;">
			<input type="text" id="cemail" name="cemail" placeholder="Customer Email" disabled style="width:75%;">
			<input type="text" id="cnumber" name="cnumber" placeholder="Customer Contact" disabled style="width:75%;">
			<input type="text" id="caddress" name="caddress" placeholder="Customer Address" disabled style="width:75%;">
			
			<br>
			<br>
			<a href="#"><i class="material-icons" style="font-size:36px;color:#2a2a57">navigate_before</i></a> &nbsp &nbsp &nbsp
			<a href="#"><i class="material-icons" style="font-size:36px;color:#2a2a57">navigate_next</i></a>
			</form>
		</div>
	</div>

	<div class="container new_btn"  style="height: 75%;">
		<div class="half-container">
			<p>Movie #1</p>
			<form class="new_btn">

			<input type="text" id="mid" name="mid" placeholder="Movie ID" disabled style="width:75%;">
			<input type="text" id="mname" name="fname" placeholder="Movie Name" disabled style="width:75%;">
			<input type="text" id="mactor" name="mactor" placeholder="Movie Actor" disabled style="width:75%;">
			<input type="text" id="mactress" name="mactress" placeholder="Movie Actress" disabled style="width:75%;">

			</form>

		</div>

		<div class="half-container">
			<p>Movie #2</p>
			<form class="new_btn">

			<input type="text" id="mid" name="mid" placeholder="Movie ID" disabled style="width:75%;">
			<input type="text" id="mname" name="fname" placeholder="Movie Name" disabled style="width:75%;">
			<input type="text" id="mactor" name="mactor" placeholder="Movie Actor" disabled style="width:75%;">
			<input type="text" id="mactress" name="mactress" placeholder="Movie Actress" disabled style="width:75%;">
			
			</form>
		</div>
	</div>

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