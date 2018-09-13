<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['Email'] ) ) {
    // Grab user data from the database using the user_id
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
<li class="navbar"><a class="navbar active" href="Index.php"><i class="fa fa-video-camera" style="font-size:16px"></i> Home</a></li>
		<li class="navbar dropdown">
			<a href="javascript:void(0)" class="dropbtn">Movies</a>
			<div class="dropdown-content">
				<a href="#Reserve">Reserve Now</a>
				<a href="#IMG_Gallery">Motion Gallery</a>
				<a href="#Upcomings">Upcomings</a>
			</div>
		</li>
		<li class="navbar"><a class="navbar" href="Contact Us - User.php">Contact Us</a></li>
		<li class="navbar_logo"><img src="Images/Logo/MovieHut Logo White.png" class="logo" width="40%" height="40%"></li>
		<li class="navbar_right"><a class="navbar" href="LogoutProcess.php"><i class="fa fa-sign-out"></i>  Logout</a></li>
		
		<form name="S_form" id="S_form" method="post" action="searchprocess.php">
			<li class="navbar_right"><input type="text" name="search12" placeholder="&#xf002 Search" class="Search"></li>
	    </form>
	</ul>

	<!-- Slideshow Gallery -->
	<!-- Container for the image gallery -->
	<div class="slideshow">

	  <!-- Full-width images with number text -->
	  <div class="mySlides">
	    <div class="numbertext">Featuring 1 of 6: The Martian</div>
	      <img src="Images/Background/Martian.jpg" style="width:100%">
	  </div>

	  <div class="mySlides">
	    <div class="numbertext">Featuring 2 of 6: Alien</div>
	      <img src="Images/Background/Alien.jpg" style="width:100%">
	  </div>

	  <div class="mySlides">
	    <div class="numbertext">Featuring 3 of 6: Venom</div>
	      <img src="Images/Background/Venom.jpg" style="width:100%">
	  </div>

	  <div class="mySlides">
	    <div class="numbertext">Featuring 4 of 6: Tomb Raider</div>
	      <img src="Images/Background/Tomb Raider.jpg" style="width:100%">
	  </div>

	  <div class="mySlides">
	    <div class="numbertext">Featuring 5 of 6: Dracula</div>
	      <img src="Images/Background/Dracula.jpg" style="width:100%">
	  </div>

	  <div class="mySlides">
	    <div class="numbertext" style="color: black;">Featuring 6 of 6: Mission Impossible Fallout</div>
	      <img src="Images/Background/MI6.jpg" style="width:100%">
	  </div>

	  <!-- Next and previous buttons -->
	  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	  <!-- Image text -->
	  <div class="caption-container">
	    <p id="caption"></p>
	  </div>

	  <!-- Thumbnail images -->
	  <div class="row">
	    <div class="column">
	      <img class="demo cursor" src="Images/Background/Martian.jpg" style="width:100%" onclick="currentSlide(1)" alt="T H E &nbsp M A R T I A N">
	    </div>
	    <div class="column"> 
	      <img class="demo cursor" src="Images/Background/Alien.jpg" style="width:100%" onclick="currentSlide(2)" alt="A L I E N">
	    </div>
	    <div class="column">
	      <img class="demo cursor" src="Images/Background/Venom.jpg" style="width:100%" onclick="currentSlide(3)" alt="V E N O M">
	    </div>
	    <div class="column">
	      <img class="demo cursor" src="Images/Background/Tomb Raider.jpg" style="width:100%" onclick="currentSlide(4)" alt="T O M B &nbsp R A I D E R">
	    </div>
	    <div class="column">
	      <img class="demo cursor" src="Images/Background/Dracula.jpg" style="width:100%" onclick="currentSlide(5)" alt="D R A C U L A &nbsp : &nbsp T H E &nbsp U N T O L D">
	    </div> 
	    <div class="column">
	      <img class="demo cursor" src="Images/Background/MI6.jpg" style="width:100%" onclick="currentSlide(6)" alt="M I S S I O N &nbsp I M P O S S I B L E &nbsp 6 &nbsp : &nbsp F A L L O U T">
	    </div>
	  </div>
	</div>

	<!-- Javascript link to Slideshow Gallery -->
	<script src="Slideshow.js" type="text/javascript"></script>

	<div class="container" id="Reserve">
		<br>
		<h1>Welcome <?php echo $_SESSION['FullName']; ?></h1>
		<p>Last Minute Movie Browsings ????? <br> No Problem <br> We have the right set of Movies for all your needs</p>
		<a href="#IMG_Gallery">Reserve Now <i class="fa fa-arrow-circle-right" style="font-size:25px;color:#2a2a57"></i></a>
	</div>

	<hr width="75%">

	<div id="IMG_Gallery" class="container" style="height: 100%;">
		<br>
		<br>
		<h1 id="Reserve">The Motion Gallery</h1>
		<p>Browse the Popular Genres<br> <br>
		Comedy | Sci-Fi | Horror | Romance | Action | Thriller <br>
		Drama | Mystery | Crime | Animation | Adventure | Fantasy</p>

	<!-- Image Gallery -->
		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=2">
		    <img src="Images/Background/Pacific Rim.jpg" alt="Pacific Rim" width="300" height="200">
		  </a>
		  <div class="desc"">Pacific Rim Uprising</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=3">
		    <img src="Images/Background/Justice League.jpg" alt="Justice League" width="300" height="200">
		  </a>
		  <div class="desc">Justice League</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=4">
		    <img src="Images/Background/Warcraft.jpg" alt="Warcraft" width="300" height="200">
		  </a>
		  <div class="desc">Warcraft: The Beginning</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=5">
		    <img src="Images/Background/Dawn of The Planet of The Apes.jpg" alt="Dawn of The Planet of The Apes" width="300" height="200">
		  </a>
		  <div class="desc">Dawn of The Planet of The Apes</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=6">
		    <img src="Images/Background/Skyfall 007.jpg" alt="Skyfall 007" width="300" height="200">
		  </a>
		  <div class="desc">Skyfall 007</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=1">
		    <img src="Images/Background/Rio 2.jpg" alt="Rio 2" width="300" height="200">
		  </a>
		  <div class="desc">Rio 2</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=7">
		    <img src="Images/Background/Assassins Creed.jpg" alt="Assassins Creed" width="300" height="200">
		  </a>
		  <div class="desc">Assassin's Creed</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=8">
		    <img src="Images/Background/Hobbit.jpg" alt="Hobbit" width="300" height="200">
		  </a>
		  <div class="desc">Hobbit: An Unexpected Journey</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=9">
		    <img src="Images/Background/Foreigner.jpg" alt="Foreigner" width="300" height="200">
		  </a>
		  <div class="desc">The Foreigner</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=10">
		    <img src="Images/Background/Happy New Year.jpg" alt="Happy New Year" width="300" height="200">
		  </a>
		  <div class="desc">Happy New Year</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=11">
		    <img src="Images/Background/Martian.jpg" alt="The Martian" width="300" height="200">
		  </a>
		  <div class="desc">The Martian</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=12">
		    <img src="Images/Background/Alien.jpg" alt="Alien" width="300" height="200">
		  </a>
		  <div class="desc">Alien</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=13">
		    <img src="Images/Background/Venom.jpg" alt="Venom" width="300" height="200">
		  </a>
		  <div class="desc">Venom</div>
		</div>

		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=14">
		    <img src="Images/Background/Tomb Raider.jpg" alt="Tomb Raider" width="300" height="200">
		  </a>
		  <div class="desc">Tomb Raider</div>
		</div>
		
		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=15">
		    <img src="Images/Background/Dracula.jpg" alt="Dracula" width="300" height="200">
		  </a>
		  <div class="desc">Dracula</div>
		</div>
		
		<div class="gallery">
		  <a href="Movie - Dynamic.php?id=16">
		    <img src="Images/Background/MI6.jpg" alt="Mission Impossible Fallout" width="300" height="200">
		  </a>
		  <div class="desc">Mission Impossible 6: Fallout</div>
		</div>
		</div>

	<hr width="96%">

	<div class="container">
		<br>
		<br>
		<br>
		<h1 id="Upcomings">About to happen. Forthcoming.</h1>
		<p>Stay tuned with us for the upcoming movies</p>
		<a href="Contact Us - User.php">Contact Us <i class="fa fa-arrow-circle-right" style="font-size:25px;color:#2a2a57"></i></a>
	</div>
	
	<div class="footer">
	  <p>Copyright 2018 <i class="fa fa-html5"></i> by <i class="fa fa-github"></i> Shakya | Rahal | Nafeel | Shohan | Sajidh</p>
	</div>

</body>
</html>
