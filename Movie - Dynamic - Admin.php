<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['Email'] ) ) {
    // Grab user data from the database using the email
    // Let them access the "logged in only" pages
    
    $id= $_GET['id'];
    
    require("connection.php");
    
    $result = mysqli_query($conn, "SELECT * FROM movie where movieId='$id'") or die("Could not execute query: " .mysqli_error($conn));
    $row=mysqli_fetch_assoc($result);

    $movieName = $row["movieName"];
    $movieStatus = $row["status"];
    $movieActor = $row["actor"];
    $movieActress = $row["actress"];
    $movieImage = $row["Image"];
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

  <ul class="navbar">
    <li class="navbar"><a class="navbar active" href="Admin.php"><i class="fa fa-dashboard" style="font-size:16px"></i> Dashboard</a></li>
    <li class="navbar_logo"><img src="Images/Logo/MovieHut Logo White.png" class="logo" width="40%" height="40%"></li>
	<li class="navbar_right"><a class="navbar" href="LogoutProcess.php"><i class="fa fa-sign-out"></i> Logout</a></li>
    
    <form name="S_form" id="S_form" method="post" action="searchprocess.php">
      <li class="navbar_right"><input type="text" name="search12" placeholder="&#xf002 Search" class="Search"></li>
    </form>
  </ul>

	<img src="<?php echo $movieImage; ?>" width="100%" height="100%">
	<div class="container" style="height: 75%;">

		<br>
		<br>

		<form method="post" action="ReserveProcess.php">
			<h1><?php echo $movieName; ?></h1>
			<p><i class="fa fa-info-circle" style="font-size:30px;color:#2a2a57"></i> <?php echo $movieStatus; ?></p>
			<br>
			<p><i class="fa fa-male" style="font-size:30px;color:#2a2a57"></i> <?php echo $movieActor; ?></p>
			<p><i class="fa fa-female" style="font-size:30px;color:#2a2a57"></i> <?php echo $movieActress; ?></p>
			<br>
		</form>

	</div>
	
	<div class="footer">
	  <p>Copyright 2018 <i class="fa fa-html5"></i> by <i class="fa fa-github"></i> Shakya | Rahal | Nafeel | Shohan | Sajidh</p>
	</div>

</body>
</html>
