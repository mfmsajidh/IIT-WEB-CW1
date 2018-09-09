<?php
// Always start this first
session_start();

// Destroying the session clears the $_SESSION variable, thus "logging" the user
// out. This also happens automatically when the browser is closed

/*
if(isset($_SESSION['Email'])){
	session_destroy();
	echo "<script>location.href='index.php'</script>";
}
else{
	echo "<script>location.href='login.php'</script>";
}
*/

/*
session_destroy();
header('location:index.php');
*/

if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}

?>