<?php

// DEBUGGING:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1. connect to database with the connect.php file
require 'connect.php';
	
// 2. create session, use session variables to manipulate webpage
session_start();

// 4. check if the login button was clicked and is not empty
if (isset($_POST['loginButton']) && !empty($_POST['loginButton']))
{
    // New version of authenticating users:
    // - get the userID and pwd with the username the person typed in
    if ($stmt = $db->prepare('SELECT userID, pwd FROM user WHERE username = ?'))
    {
        // set the data into variables
		$unsanitized_username = $_POST['username'];
		$unsanitized_pwd = $_POST['pwd'];

        // sanitize the data
        $username = filter_var($unsanitized_username, FILTER_SANITIZE_STRING);
        $pwd = filter_var($unsanitized_pwd, FILTER_SANITIZE_STRING);
        
        // validate that username exists in database
        // - use prepare statements to prevent sql injections
		$query = "SELECT pwd FROM `user` WHERE `username` = :username";
        $stmt = $db->prepare($query);
		$stmt->bindParam(':username', $username);

        // get results
		$result = $stmt->execute();
		$row = $result->fetchArray(SQLITE3_ASSOC);
		if($row)
        {
            // now check that the hashed password is correct
            if (password_verify($pwd, $row['pwd']))
            {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
			    header('Location: ./home.php');
            }
		}
        else
        {
            $_SESSION['loggedin'] = false;
            echo "username or password not found, try again";
			header('Location: ./login.php');
		}
	}
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav>
        <img src="images/logo.png" class="logo">
        <ul>
            <li><a href="./home.php">Home</a></li>
            <li><a href="#">Log In</a></li>
        </ul>
    </nav>

    <!-- Login form -->
    <div class="signup-container">
        <div class="signup-details">
            <h1>Log in to your account here:</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="pwd">
                </div>

                <input type="submit" name="loginButton">

                <p>For testing purposes, use username: test and password: test</p>
            </form>
        </div>
    </div>

    <footer><p style="display: block; text-align: center; padding: 3px; background-color: #bbb7df;
    color: rgba(255, 255, 255, 0.741);">© BeFit 2023</p></footer>
</body>

</html>


