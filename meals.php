<?php
// connect to the database
require 'connect.php';
// create session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="workouts.css">
	<style>
		/* Styles for the sidebar */
		.sidebar {
			float: left;
			width: 25%;
			height: 100%;
			background-color: #fff;
			padding: 20px;
			overflow: auto;
			box-sizing: border-box;
		}

		/* Styles for the main content */
		.main-content {
			float: left;
			width: 75%;
			height: 100%;
			padding: 20px;
			box-sizing: border-box;
		}

		/* Styles for the links in the sidebar */
		.sidebar a {
			display: block;
			color: black;
			padding: 8px 16px;
			text-decoration: none;
		}

		/* Styles for the active link in the sidebar */
		.sidebar a.active {
			background-color: #2a6347;
			color: white;
		}
        
	</style>
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
	<!-- Sidebar navigation -->
	<div class="sidebar">
		<a href="#" class="active">What is Meal Prepping?</a>
		<p>Meal prepping is an efficient and effective way to know the exact amount of calories you are intaking on a daily basis by storing your meals by the exact portion/serving size.
           Click any button on the right to find tasty and healthy meals that adhere to your specified dietary restrictions.</p>
	</div>
	
	<img src="images/diets.png" usemap="#image-map">

	<map name="image-map">
    	<area target="" alt="keto" title="keto" href="meals/keto/keto1.php" coords="123,115,80" shape="circle">
    	<area target="" alt="paleo" title="paleo" href="meals/paleo/paleo1.php" coords="306,118,81" shape="circle">
    	<area target="" alt="vegetarian" title="vegetarian" href="meals/vegetarian/vegetarian1.php" coords="491,119,85" shape="circle">
    	<area target="" alt="vegan" title="vegan" href="meals/vegan/vegan1.php" coords="672,119,84" shape="circle">
    	<area target="" alt="mediterranean" title="mediterranean" href="meals/mediterranean/mediterranean1.php" coords="128,321,86" shape="circle">
    	<area target="" alt="raw" title="raw" href="meals/raw/raw1.php" coords="307,315,77" shape="circle">
    	<area target="" alt="low_carb" title="low_carb" href="meals/lowcarb/low_carb1.php" coords="492,320,88" shape="circle">
    	<area target="" alt="no_sugar" title="no_sugar" href="meals/nosugar/no_sugar1.php" coords="676,321,86" shape="circle">
	</map>
	<!-- Main content -->

</body>
</html>
