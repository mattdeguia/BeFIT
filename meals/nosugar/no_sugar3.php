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
    <title>Chicken Sweet Corn Soup</title>
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
        <h1>How to Make Chicken Sweet Corn Soup</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/HV4UmGbLOFk" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>Chicken Sweet Corn Soup is a classic Indo Chinese recipe. It is a perfect winter recipe, which can be prepared easily. Sweet Corn Chicken Soup is healthy soup and contains all the necessary nutrients, along with that it is very delicious in taste.</p>
                <b>Ingredients:</b>
                <ol>
                    <li>1 1/2 cup Corn (boiled)</li>
                    <li>Water</li>
                    <li>200 gms Boneless Chicken Breast (shredded)</li>
                    <li>1 tbsp Oil</li>
                    <li>1 tbsp Spring Onions (white)</li>
                    <li>1 tbsp Celery</li>
                    <li>1 1/2 tsp Garlic (minced)</li>
                    <li>Corn Paste (already Made)</li>
                    <li>3 cups Chicken Stock</li>
                    <li>Black Pepper (crushed)</li>
                    <li>Salt</li>
                    <li>1 tsp Sugar</li>
                    <li>1 tbsp Cornflour and Water</li>
                    <li>2 Egg White</li>
                    <li>Spring Onion (green)</li>
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
                    <li>Take a wok and heat some oil, add spring onion (white), finely chopped celery and minced garlic in it.</li>
                    <li>Add the corn paste and swirl it around, now add chicken stock and mix it well.</li>
                    <li>Increase the heat, add crushed black pepper, salt, and corn, let the soup boil.</li>
                    <li>Once it is about to boil, add chicken and stir it around, sugar for taste.</li>
                    <li>Now add cornflour slurry (cornflour + water) and stir it well to maintain consistency.</li>
                    <li>Take egg whites and add a little into the soup.</li>
                    <li>Turn off the heat and add spring onion (green) and the Chicken Sweet Corn Soup is ready to serve.</li>
                </ol>
                <p></p>
            </div>
        </div>

    </div>

</body>
</html>
