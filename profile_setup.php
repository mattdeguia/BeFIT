<?php

// DEBUGGING:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// connect to database
require 'connect.php';

// create session, use session variables to manipulate webpage
session_start();

// 2. check if the signin button was clicked and is not empty
if (isset($_POST['signupButton']) && !empty($_POST['signupButton']))
{
    // store post values into variables
    $unsanitized_Pintro = $_POST["intro"];
    $unsanitized_Pabout = $_POST["about"];

    // sanitize the data
    $Pintro = filter_var($unsanitized_Pintro, FILTER_SANITIZE_STRING);
    $Pabout = filter_var($unsanitized_Pabout, FILTER_SANITIZE_STRING);


    // insert data into the database
    // - user(userID, fname, lname, username, password, email);
    $insert = $db->prepare("INSERT INTO profiles(profile_intro, profile_about) 
                            VALUES(:Pintro, :Pabout)");

    // bind the values that the user gave
    $insert->bindValue(":Pintro", $Pintro, SQLITE3_TEXT);
    $insert->bindValue(":Pabout", $Pabout, SQLITE3_TEXT);

    // execute the statement
    //$insert->execute();

    if ($insert->execute()) {
        $_SESSION['profile_intro'] = $Pintro;
        $_SESSION['profile_about'] = $Pabout;

        $select = $db->prepare("SELECT * FROM profiles WHERE profile_intro=:Pintro AND profile_about=:Pabout");
        $select->bindValue(":Pintro", $Pintro, SQLITE3_TEXT);
        $select->bindValue(":Pabout", $Pabout, SQLITE3_TEXT);
        $result = $select->execute();

        if ($result) {
            $row = $result->fetchArray(SQLITE3_ASSOC);
            $_SESSION['profile_intro'] = $row['profile_intro'];
            $_SESSION['profile_about'] = $row['profile_about'];
        }
        
        header("Location: home.php");
    } else {
        echo "Error: Could not register user. Error details: " . $db->lastErrorMsg();
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
            <li><a href="#">Signing Up</a></li>
        </ul>
    </nav>

    <!-- user sets up profile page here -->
    <div class="signup-details">
        <h1>Please Set Up Your Profile Page:</h1>
        <div class="signup-container">
            <form method="POST">
                <div class="form-group">
                    <label for="intro">Profile Introduction:</label>
                    <input type="text" name="intro" maxlength="50">
                </div>

                <div class="form-group">
                    <label for="about">Tell us about yourself:</label>
                    <textarea name="about" rows="5" cols="40" maxlength="250" onkeyup="countChars(this)" style="width:100%"></textarea>
                    <div id="charNum">250 characters remaining</div>
                </div>

                <div class="form-group">
                    <input type="submit" name="signupButton">
                </div>
            </form>
        </div>
    </div>

    <footer><p style="display: block; text-align: center; padding: 3px; background-color: #bbb7df;
    color: rgba(255, 255, 255, 0.741);">© BeFit 2023</p></footer>

    <script>
        // Function to count the number of characters in the "Tell us about yourself" text box
        function countChars(textarea) {
            var charNum = document.getElementById('charNum');
            var charsLeft = 250 - textarea.value.length;
            charNum.innerHTML = charsLeft + " characters remaining";
        }
    </script>
</body>

</html>
