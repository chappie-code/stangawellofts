<?php
// checkLogin.php

session_start(); // Start a new session
// require('conn.php'); // Holds all of our database connection information

// Get the data passed from the form
// $username = $_POST['user'];
$password = $_POST['password'];

// Do some basic sanitizing
$username = stripslashes($username);
$password = stripslashes($password);

// $sql = "select * from users where username = '$username' and password = '$password'";
// $result = mysql_query($sql) or die ( mysql_error() );

//while ($line = mysql_fetch_assoc($result)) {
//	$count++;
//}

$count = 0;
// use the same login as within the Private Page. Future this should use a database.
if ($password == "Prince"){
	$count = 1;	
}

if ($count == 1) {
	$_SESSION['loggedIn'] = "true";
	header("Location: ../ForSale.php"); // This is wherever you want to redirect the user to
} else {
	$_SESSION['loggedIn'] = "false";
	header("Location: ../sale.php"); // Wherever you want the user to go when they fail the login
}

?>

