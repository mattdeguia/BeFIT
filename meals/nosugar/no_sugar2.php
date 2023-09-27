<?php
// connect to the database
include '../../../connect.php';

// create session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../workouts.css">
    <title>Sugar Free Peanut Butter Cookies</title>
	<style>
     /* Styles for the sidebar */
        .sidebar {
            float: left;
            width: 19%;
            height: 100%;
            background-color: #fff;
            padding: 20px;
            overflow: auto;
            box-sizing: border-box;
        }

        /* Styles for the main content */
        .main-content {
            float: left;
            width: 70%;
            height: 100%;
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
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
                    <img src="../../images/go_back.png">
                    <a href="../../meals.php">Go back to meals</a></li>
            </div>
        </ul>
    </nav>

	<!-- Sidebar navigation -->
	<div class="sidebar">
		<a href="#" class="active">NO SUGAR MEALS</a>
        <a href="no_sugar1.php">Meal 1: Sugar Free Apple Pie</a>
        <a href="no_sugar2.php">Meal 2: Sugar Free Peanut Butter Cookies</a>
        <a href="no_sugar3.php">Meal 3: Chicken Sweet Corn Soup</a>
	</div>

    <div class="main-content">
        <h1>How to Make Sugar Free Peanut Butter Cookies</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/WSiQ4Kh1B94" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>This short and simple peanut butter cookie recipe adds more variety to your nighttime snacking while keeping you healthy!</p>
                <b>Ingredients:</b>
                <ol>
                    <li>1 egg</li>
                    <li>1/2 cup peanut butter</li>
                    <li>2 tbsp honey</li>
                    <li>1/2 cup oats</li>
                </ol>
                <p></p>
            </div>
        </div>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Cooking Instructions</h2>
            </div>
            <div class="exercise-description">
                <!-- <p><b>Cook Time:</b> 15 Minutes</p> -->
               <p> <b>Cooking Instructions</b> </p>
                <ol>
                    <li>Allow cooling completely before slicing.</li>
                    <li>Whisk egg, honey and peanut butter.</li>
                    <li>Once the peanut butter is blended well, add oats and blend well.</li>
                    <li>Take small amount and give a cookies shape. Place it on baking tray.</li>
                    <li>Bake in pre-heated oven for 15-20 minutes.</li>
                    <li>I would suggest to bake 10 minutes and check in between.</li>

                </ol>
                <p></p>
            </div>
        </div>

    </div>

</body>
</html>
