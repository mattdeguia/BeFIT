<?php
require 'connect.php';
session_start();
//var_dump($_SESSION);
?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>



<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- NOT Logged In -->
<?php if ($_SESSION['loggedin'] == false || empty($_SESSION['loggedin'])): ?>
    <div class="hero">
        <nav>
            <img src="images/logo.png" class="logo">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="#"> </a></li>
            </ul>

            <!--img src="images/user.png" class="user-pic" onclick="toggleMenu()"-->
            <!--Hamburger menu icon - setting up 3 bars-->
            <div class="container" onclick="change(this); toggleMenu()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <p>Dont have an account?</p>
                    <a href="./signup.php" class="user-info">
                        <img src="images/signup.png">
                        <h3>Sign up</h3>
                    </a>
                    <hr>
                    <a href="./login.php" class="sub-menu-link">
                        <img src="images/user.png">
                        <p>Log in</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>
        <?php include 'slideshow.php'; ?>
        <!-- Company Bio -->
    <div class="company-bio">
    <p>BeFit was founded by a team of fitness enthusiasts who understand the challenges faced by beginners in their fitness journey. Our mission is to provide an accessible, user-friendly platform for those who want to make a change in their lives by embracing a healthier lifestyle.</p>
    </div>

    </div>
    
    <footer><p style="display: block; text-align: center; padding: 3px; background-color: #bbb7df;
    color: rgba(255, 255, 255, 0.741);">© BeFit 2023</p></footer>

<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- Logged In -->
<?php else: ?>
    <div class="hero">
        <nav>
            <img src="images/logo.png" class="logo">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./meals.php">Meals</a></li>
                <li><a href="./workouts.php">Workouts</a></li>
                <li><a onclick="toggleMenu2()" href="#">Calculate my <i class="fa fa-caret-down"></i></a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="#"> </a></li>
            </ul>

            <!--img src="images/user.png" class="user-pic" onclick="toggleMenu()"-->
            <!--Hamburger menu icon - setting up 3 bars-->
            <div class="container" onclick="change(this); toggleMenu()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="images/user.png">
                        <h3><?php echo $_SESSION['username'] ?></h3>
                    </div>
                    <hr>
                    <a href="profile.php" class="sub-menu-link">
                        <img src="images/profile.png">
                        <p>Profile</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="images/settings.png">
                        <p>Settings</p>
                        <span>></span>
                    </a>
                    <a href="./logout.php" class="sub-menu-link">
                        <img src="images/logout.png">
                        <p>logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>
            <!-- MENU 2 -> calculating bmi -->
            <div class="sub-menu-wrap" id="subMenu2">
                <div class="sub-menu">
                    <a href="#" class="sub-menu-link" onclick="openBmiCalculator()">
                        <p>BMI</p>
                        <span>></span>
                    </a>
                    <!-- BMI CALCULATOR -->
                    <div id="bmi-calculator" class="calculator" style="display:none">
                    <h3>BMI Calculator</h3>
                        <label for="height-feet">Height (ft):</label>
                        <input type="number" id="height-feet" name="height-feet" required>
                        <label for="height-inches">Height (in):</label>
                        <input type="number" id="height-inches" name="height-inches" required>
                        <label for="weight">Weight (lb):</label>
                        <input type="number" id="weight" name="weight" required><br><br>
                        <button type="button" onclick="calculateBmi()">Calculate</button>
                        <button type="button" onclick="resetCalculators()">Reset</button>
                        <p>Your BMI is: <span id="bmi-result"></span></p>
                    </div>

                    <a href="#" class="sub-menu-link" onclick="openCalorieCalculator()">
                        <p>Calories</p>
                        <span>></span>
                    </a>
                    <!-- Calorie Calculator -->
                    <div id="calorie-calculator" class="calculator" style="display:none">
                        <h3>Calorie Calculator</h3>
                        <label for="calorie-age">Age:</label>
                        <input type="number" id="calorie-age" name="calorie-age" required>
                        <br>
                        <label for="calorie-gender">Gender:</label>
                        <select id="calorie-gender" name="calorie-gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <br>
                        <label for="calorie-height-feet">Height (ft):</label>
                        <input type="number" id="calorie-height-feet" name="calorie-height-feet" required>
                        <label for="calorie-height-inches">Height (in):</label>
                        <input type="number" id="calorie-height-inches" name="calorie-height-inches" required>
                        <br>
                        <label for="calorie-weight">Weight (lbs):</label>
                        <input type="number" id="calorie-weight" name="calorie-weight" required>
                        <br>
                        <label for="calorie-activity-level">Activity Level:</label>
                        <select id="calorie-activity-level" name="calorie-activity-level">
                            <option value="sedentary" title="Little or no exercise and desk job">Sedentary</option>
                            <option value="lightly_active" title="Light exercise or sports 1-3 days a week">Lightly
                                Active</option>
                            <option value="moderately_active" title="Moderate exercise or sports 3-5 days a week">
                                Moderately Active</option>
                            <option value="very_active" title="Hard exercise or sports 6-7 days a week">Very Active
                            </option>
                            <option value="extra_active"
                                title="Very hard exercise or sports, physical job or training 2x/day">Extra Active
                            </option>
                        </select>
                        <br><br>
                        <button type="button" onclick="calculateCalories()">Calculate</button>
                        <button type="button" onclick="resetCalculators()">Reset</button>
                        <p>Your daily calorie needs: <span id="calorie-result"></span></p>
                    </div>
                </div>
            </div>
        </nav>

    <?php include 'slideshow.php'; ?>
    
    <!-- Company Bio -->
    <div class="company-bio">
    <p>BeFit was founded by a team of fitness enthusiasts who understand the challenges faced by beginners in their fitness journey. Our mission is to provide an accessible, user-friendly platform for those who want to make a change in their lives by embracing a healthier lifestyle.</p>
    </div>
    
    <footer><p style="display: block; text-align: center; padding: 3px; background-color: #bbb7df;
    color: rgba(255, 255, 255, 0.741);">© BeFit 2023</p></footer>
    
<?php endif; ?>

    <script>
    let subMenu = document.getElementById("subMenu");
    let subMenu2 = document.getElementById("subMenu2");
    let bmiCalculator = document.getElementById("bmi-calculator");
    let calorieCalculator = document.getElementById("calorie-calculator");


    function toggleMenu() {
        subMenu.classList.toggle("open-menu");
    }

    function toggleMenu2() {
        subMenu2.classList.toggle("open-menu");
    }

    function openBmiCalculator() {
        if (bmiCalculator.style.display === "block") {
            bmiCalculator.style.display = "none";
        } else {
            bmiCalculator.style.display = "block";
        }
    }

    function openCalorieCalculator() {
        if (calorieCalculator.style.display === "block") {
            calorieCalculator.style.display = "none";
        } else {
            calorieCalculator.style.display = "block";
        }
    }

    function calculateBmi() {
        const feet = document.getElementById("height-feet").value;
        const inches = document.getElementById("height-inches").value;
        const weight = document.getElementById("weight").value;
        const totalInches = (feet * 12) + parseInt(inches);
        const bmi = (weight / (totalInches * totalInches)) * 703;
        const bmiResult = document.getElementById("bmi-result");
        bmiResult.textContent = bmi.toFixed(2);
    }

    function calculateCalories() {
        const heightFeet = parseInt(document.getElementById("calorie-height-feet").value);
        const heightInches = parseInt(document.getElementById("calorie-height-inches").value);
        const weight = parseInt(document.getElementById("calorie-weight").value);
        const age = parseInt(document.getElementById("calorie-age").value);
        const gender = document.getElementById("calorie-gender").value;
        const activityLevel = document.getElementById("calorie-activity-level").value;

        const totalHeightInches = (heightFeet * 12) + heightInches;
        let bmr;

        if (gender === "male") {
            bmr = 88.362 + (13.397 * (weight * 0.453592)) + (4.799 * (totalHeightInches * 2.54)) - (5.677 * age);
        } else {
            bmr = 447.593 + (9.247 * (weight * 0.453592)) + (3.098 * (totalHeightInches * 2.54)) - (4.330 * age);
        }

        let tdee;

        switch (activityLevel) {
            case "sedentary":
                tdee = bmr * 1.2;
                break;
            case "lightly_active":
                tdee = bmr * 1.375;
                break;
            case "moderately_active":
                tdee = bmr * 1.55;
                break;
            case "very_active":
                tdee = bmr * 1.725;
                break;
            case "extra_active":
                tdee = bmr * 1.9;
                break;
        }

        const calorieResult = document.getElementById("calorie-result");
        calorieResult.textContent = isNaN(tdee) ? "Invalid input" : tdee.toFixed(0);
    }

    function resetCalculators() {
    // Reset BMI calculator
    document.getElementById("height-feet").value = "";
    document.getElementById("height-inches").value = "";
    document.getElementById("weight").value = "";
    document.getElementById("bmi-result").textContent = "";

    // Reset Calorie calculator
    document.getElementById("calorie-age").value = "";
    document.getElementById("calorie-gender").value = "male";
    document.getElementById("calorie-height-feet").value = "";
    document.getElementById("calorie-height-inches").value = "";
    document.getElementById("calorie-weight").value = "";
    document.getElementById("calorie-activity-level").value = "sedentary";
    document.getElementById("calorie-result").textContent = "";
}




    function change(x) {
        x.classList.toggle("change");
    }
    </script>
</body>

</html>
