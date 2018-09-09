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
    header("Location: User.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register H U T</title>
	            
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
               <!--Java Script Definition-->
    <script type="text/javascript" src="Validation.js"> </script>

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
    <li class="navbar_right"><a class="navbar" href="Register.php">Register</a></li>
    <li class="navbar_right"><a class="navbar" href="Login.php">Login</a></li>
    <li class="navbar_right"><input type="text" name="search" placeholder="&#xf002 Search" class="Search"></li>
  </ul>
  <!-- End of Navigation Bar -->

<div class="background"> </div>
  <div class="Content1">
    <p align="center">Watch Order Purchase Reserve<br> HD Blu Ray Movies With US</p>
    <hr>
    <h2 align="center">Register to H U T</h2>
    <p align="center">Already Have an Account</p>
    <input type="Submit" value="Sign In" id="cmdlogin" class="btnlogin" onclick="window.location.href='Login.html'">

  </div>

  <!-- Division for the Registration Form-->      
  <div class="Content">
  

  <font size="4"><p align="center"><b>Sign Up</b></p></font>
  <hr>
  <form name ="form1"  method="post" onsubmit = "return checkforblank()" action="RegisterProcess.php">
    <table border="0">
      <!-- Name and Name Text Box-->
                        
      <tr>
        <td><label for="Name">Full Name:</label></td>
      </tr>

      <tr>
        <td><input class="textbox" onkeyup="validateName()" type="text" id="txtname" name="fullname"><label id ="commentnameprompt"></label></td>
      </tr>
                        
      <!-- Radio Button for gender-->
      <tr>
      	<td><label for="Gender">Gender:</label></td>
      </tr>

      <tr>
        <td>
      		<input type="radio" name="gender" value="male" checked> Male&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type="radio" name="gender" value="female"> Female&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type="radio" name="gender" value="other"> Other</td>
      </tr>
      
      <!-- USER Name and USER Name text box-->
      <tr>
      	<td><label for="User Name">User Name:</label></td>
      </tr>

      <tr>
      	<td><input onkeyup = "validateUsername()" class="textbox" type="text" id="txtuname" name="username"><label id="commentusername"></label></td>
      </tr>	
    
      <!-- EMAIL and EMAIL text box-->
      <tr>
      	<td><label for="email">Email:</label></td>
      </tr>

      <tr>
      	<td><input class="textbox" type="Email" name="txtemail" id="txtemail1"></td>
      </tr>

      <!-- PASSWORD and PASSWORD text box-->
      <tr>
      	<td><label for="Password"> Set Password:</label></td>
      </tr>

      <tr>
      	<td><input class="textbox" type="password" name="txtpassword" id="password1"></td>
      </tr>
    
      <!-- CONTACT NO and CONTACT NO text box-->
      <tr>
      	<td><label for="Name">Contact No:</label></td>
      </tr>

      <tr>
      	<td><input name="phonenum" class="textbox" type="text" id="txtno" pattern="[1-9]{1}[0-9]{9}"></td>
      </tr>
   
      <!-- ADDRESS and ADDRESSS text box-->
      <tr>
      	<td><label for="Address">Address:</label></td>
      </tr>

      <tr>
      <td><textarea name="address" class="textbox" cols="35" rows="2" id="txtaddress"></textarea></td> 
      </tr>
      
      <!-- CHECK BOX-->
      <tr>
      	<td><input type="checkbox" name="chk1" value="checked">Accept terms and Policies</td>
      </tr>

      <!-- BUTTONS -->
      <tr>
      	<td> <input type="Submit"  class="btnsignup"  value="SignUp"></td>
      </tr>   
    </table>
  </form>
  
  </div>

</body>
</html>
