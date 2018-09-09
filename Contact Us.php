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
  <title>Contact H U T</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <!-- Favicon -->
 
  <link rel="apple-touch-icon" sizes="76x76" href="Images/Logo/Favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Images/Logo/Favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Images/Logo/Favicon/favicon-16x16.png">
  <link rel="manifest" href="Images/Logo/Favicon/site.webmanifest">
  <link rel="mask-icon" href="Images/Logo/Favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" type="text/css" href="Style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style>

  .mySlides {
    display: none
  }
  
  </style>


</head>
<body>

  <!-- Navigation Bar -->
  <ul class="navbar">
    <li class="navbar"><a class="navbar active" href="Index.php"><i class="fa fa-video-camera" style="font-size:16px"></i></a></li>
    <li class="navbar dropdown">
      <a href="Index.php" class="dropbtn">Movies</a>
      <div class="dropdown-content">
        <a href="Index.php#Reserve">Reserve Now</a>
        <a href="Index.php#IMG_Gallery">Motion Gallery</a>
        <a href="Index.php#Upcomings">Upcomings</a>
      </div>
    </li>
    <li class="navbar"><a class="navbar" href="Contact Us.php">Contact Us</a></li>
    <li class="navbar_logo"><img src="Images/Logo/MovieHut Logo White.png" class="logo" width="40%" height="40%"></li>
    <li class="navbar_right"><a class="navbar" href="Register.php">Register</a></li>
    <li class="navbar_right"><a class="navbar" href="Login.php">Login</a></li>
  </ul>


  <!-- Page content -->
  <div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- The introduction Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
      <h2 class="w3-wide">What is Movie Hut?</h2>

      <p class="w3-opacity"><i></i></p>
      <p class="w3-center">Movie Hut is an entertainment company that has revolutionized the way movies are rented. Originally developed in 2018, Movie Hut has basically taken the movies rental industry by storm by making it extremely easy to rent movies at a reasonable cost.
      </p>
    </div>

    <div class="w3-center">
      <div class="w3-center">
        <img src="Images/Logo/MovieHut Logo.png" class="w3-center" alt="unnamed" style="width:30%">
      </div>
    </div>
  
  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Colombo, Sri Lanka<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +94112222222<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: moviehut@iit.ac.lk<br>
      </div>
      <div class="w3-col m6">
        <form method="post" action="ContactProcess.php">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
<<<<<<< HEAD
              <input class="w3-input w3-border" type="email" placeholder="Email" required name="Email">
=======
              <input class="w3-input w3-border" type="email" placeholder="Email" required name="Email" email>
>>>>>>> cae3d46fef5eabe7d0f49c4146ff11cea6ae3aa8
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->

<!-- Add Google Maps -->
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.211234065176!2d79.85766181431742!3d6.865271495038841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25ba4e617b3d9%3A0xd5a3b0418f1cf497!2sInformatics+Institute+of+Technology+(IIT)!5e0!3m2!1sen!2slk!4v1534437220936" width="1350" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</p>
</body>

<!-- Footer -->
<div class="footer">
    <p>Copyright 2018 <i class="fa fa-html5"></i> by <i class="fa fa-github"></i> Shakya | Rahal | Nafeel | Shohan | Sajidh</p>
</div>

</html>
