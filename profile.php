<?php
require 'connect.php';
session_start();


$quotes = [
    "Believe you can and you're halfway there.",
    "Your limitation—it's only your imagination.",
    "Push yourself, because no one else is going to do it for you.",
    "Great things never come from comfort zones.",
    "Dream it. Wish it. Do it.",
];

$random_index = array_rand($quotes);
$quote = $quotes[$random_index];

$meal_links = ["Keto Stir Fry" => "meals/keto/keto1.php", "Keto Enchilada" => "meals/keto/keto2.php", "Poke Bowl" => "meals/keto/keto3.php"];

srand(date("Ymd"));
$random_meal = array_rand($meal_links);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile Page</title>
    <link rel="stylesheet" href="profile.css"/>
	<link rel="stylesheet" href="workouts.css">
</head>
<body>
	<nav>
        <ul>
            <div class="left_workouts">
                <li>
                <img src="images/go_back.png">
                    <a href="./home.php">Go back to home</a>
                </li>
            </div>
        </ul>
    </nav>
	<div class="exercise-details">
		<div class="exercise-container">
			<div class="container">
				<div class="profile-picture">
					<img src="images/profile.png" alt="Profile Picture">
				</div>
				<div class="profile-name" style="color: black;">
					<h3><center><?php echo $_SESSION['username'] ?></center></h3><br>
					<p style="font-size: 40px;"><center><?php echo $quote; ?></center></p> <br>
				</div>
				<div class="intro-section">
				<?php if (isset($_SESSION['profile_intro'])) { ?>
					<h2><?php echo $_SESSION['profile_intro'] ?></h2>
				<?php } ?>
				<?php if (isset($_SESSION['profile_about'])) { ?>
					<p><?php echo $_SESSION['profile_about'] ?></p>
				<?php } ?>
				</div>
				<div class="meal"><br>
					<h3 style="font-size: 30px; text-align: center;">Daily Meal</h3>
					<a href="<?php echo $meal_links[$random_meal]; ?>"><center><?php echo $random_meal; ?></center></a><br><br>
					<h3 style="font-size: 30px; text-align: center;">Quick Diet Links</h3>
					<a href="meals/keto/keto1.php"><center>Keto</center></a><br>
					<a href="meals/lowcarb/low_carb1.php"><center>Low Carb</center></a><br>
					<a href="meals/mediterranean/mediterranean1.php"><center>Mediterranean</center></a><br>
					<a href="meals/nosugar/no_sugar1.php"><center>No Sugar</center></a><br>
					<a href="meals/paleo/paleo1.php"><center>Paleo</center></a><br>
					<a href="meals/raw/raw1.php"><center>Raw</center></a><br>
					<a href="meals/vegan/vegan1.php"><center>Vegan</center></a><br>
					<a href="meals/vegetarian/vegetarian1.php"><center>vegetarian</center></a><br><br><br>
				</div>
				<div class="beginner_workout">
					<h3 style="font-size: 30px; text-align: center;">Weekly Workout for Beginners</h3>
					<div class="exercise-description">
					<p style="font-size: 25px;">Day 1-Monday: Full-Body Workout</p>
					<ol>
						<li><a href="workouts/quads.php#prisoner">Squats</a>: 2 sets of 10-12 repetitions (reps)</li>
						<li><a href="workouts/chest.php#incline_press">Incline Bench Press </a> or <a href="workouts/chest.php#push_up">Push Ups</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/upper_back.php#bent_over">Dumbbell Bent Over</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/forearms.php#wrist_flex">Wrist Flixion</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/quads.php#walking">Lunges</a>: 2 sets of 10-12 reps per leg</li>
						<li><a href="workouts/abs.php#planks">Plank</a>: Hold for 30 seconds, rest, and repeat 2 more times</li>
					</ol>
					<p style="font-size: 25px;">Day 2-Tuesday: Rest or Light Cardio</p>
					<ol>
						<p>A light cardio activity like walking.</p>
					</ol>
					<p style="font-size: 25px;">Day 3-Wednesday: Full-Body Workout</p>
					<ol>
						<li><a href="workouts/upper_back.php#barbell_dealift">Barbell Deadlift</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/upper_back.php#pull_ups">Pull Ups</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/chest.php#incline_press">Incline Bench Press </a> or <a href="workouts/chest.php#push_up">Push Ups</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/upper_back.php#bent_over">Dumbbell Bent Over</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/calves.php#on_toes">Walk on Toes</a>: 2 sets of 10-12 reps per leg</li>
						<li><a href="workouts/abs.php#planks">Plank</a>: Hold for 30 seconds per side, rest, and repeat<br> 2 more times</li>						
					</ol>
					<p style="font-size: 25px;">Day 4-Thursday: Rest or Light Cardio</p>
					<ol>
						<p> a light cardio activity for 30 minutes.</p>						
					</ol>
					<p style="font-size: 25px;">Day 5-Friday: Full-Body Workout</p>
					<ol>
						<li><a href="workouts/quads.php#goblet">Goblet Squats</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/chest.php#incline_press">Incline Bench Press </a> or <a href="workouts/chest.php#push_up">Push Ups</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/biceps.php#preacher_curls">Preacher Curls</a>: 2 sets of 10-12 reps per arm</li>
						<li><a href="workouts/chest.php#chest_fly">Chest Fly</a>: 2 sets of 10-12 reps</li>
						<li><a href="workouts/quads.php#walking">Lunges</a>: 2 sets of 10-12 reps per leg</li>
						<li><a href="workouts/abs.php#bicycle_crunches">Bicycle Crunches</a>: 2 sets of 15-20 reps</li>						
					</ol>
					<p style="font-size: 25px;">Day 6 & 7-Saturday & Sunday: <br>Rest or Light Activity</p>
					<ol>
						<p>light cardio activity for 30 minutes like walking.</p>						
					</ol>
					</div>
				</div>
				<div class="profile-settings">
					<button><a href="./profile_update.php">Profile Settings</a></button>
				</div>
			</div>
		</div>	
	</div>	
</body>
</html>
