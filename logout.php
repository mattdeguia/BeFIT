<?php
// start session
session_start();

// change it to false to log user out
$_SESSION['loggedin'] = false;

// redirect user to home page with appropriate navigation bar
header("Location: ./home.php");
?>