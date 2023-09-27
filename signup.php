<?php

// DEBUGGING:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// create session, use session variables to manipulate webpage
session_start();

// connect to database
require 'connect.php';



// 2. check if the signin button was clicked and is not empty
if (isset($_POST['signupButton']) && !empty($_POST['signupButton']))
{
    // store post values into variables
    $unsanitized_fname = $_POST["fname"];
    $unsanitized_lname = $_POST["lname"];
    $unsanitized_username = $_POST["username"];
    $unsanitized_pwd = $_POST["pwd"];
    $unsanitized_email = $_POST["email"];

    // sanitize the data
    $fname = filter_var($unsanitized_fname, FILTER_SANITIZE_STRING);
    $lname = filter_var($unsanitized_lname, FILTER_SANITIZE_STRING);
    $username = filter_var($unsanitized_username, FILTER_SANITIZE_STRING);
    $sanitized_pwd = filter_var($unsanitized_pwd, FILTER_SANITIZE_STRING);
    $email = filter_var($unsanitized_email, FILTER_SANITIZE_EMAIL);

    // hash the password before storing it into the database
    $pwd = password_hash($sanitized_pwd, PASSWORD_DEFAULT);

    // DEBUGGING: check if the default salt and variable salt match the password given
    // if it echos "1", then the hash worked correctly
    // echo password_verify($pwd, $hash_default_salt ) . "<br>";

    // insert data into the database
    // - user(userID, fname, lname, username, password, email);
    $insert = $db->prepare("INSERT INTO user(fname, lname, username, pwd, email) 
                            VALUES(:fname, :lname, :username, :pwd, :email)");

    // bind the values that the user gave
    $insert->bindValue(":fname", $fname, SQLITE3_TEXT);
    $insert->bindValue(":lname", $lname, SQLITE3_TEXT);
    $insert->bindValue(":username", $username, SQLITE3_TEXT);
    $insert->bindValue(":pwd", $pwd, SQLITE3_TEXT);
    $insert->bindValue(":email", $email, SQLITE3_TEXT);

    // execute the statement
    
    if ($insert->execute()) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: profile_setup.php");
    } else {
        echo "Error: Could not register user. Error details: " . $db->lastErrorMsg();
    }
    // check for errors when executing statement
    //$le = $db->lastErrorMsg();
    //if (strlen($le) > 0 && $le !== "not an error") {
    //    echo $le;dd
    //}

    // set to true so we can keep the user logged in through out all webpages
    
    //header("Location: ./home.php");
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
            <li><a href="#">Signing Up</a></li>
        </ul>
    </nav>

    <!-- 1. User signs up for website here -->
    <div class="signup-details">
        <h1>Sign up for your account here:</h1>
        <div class="signup-container">
            <form method="POST">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" name="fname">
                </div>

                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" name="lname">
                </div>

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="pwd">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email">
                </div>

                <div class="form-group">
                    <input type="submit" name="signupButton">
                </div>
            </form>
        </div>
    </div>

    <footer><p style="display: block; text-align: center; padding: 3px; background-color: #bbb7df;
    color: rgba(255, 255, 255, 0.741);">© BeFit 2023</p></footer>
</body>

</html>

