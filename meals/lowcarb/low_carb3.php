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
	<title>Low Carb Breakfast Sandwich</title>
</head>

<body>
    <nav>
	<ul>
	    <div class="left_workouts">
		<li>
		    <img src="../../images/go_back.png">
            <a href="../../meals.php">Go back to meals</a>
		</li>
	    </div>
	</ul>
    </nav>

	<!-- Sidebar navigation -->
	<div class="sidebar">
		<a href="#" class="active">LOW CARB MEALS</a>
        <a href="low_carb1.php">Meal 1: Seasame Salmon Salad</a>
        <a href="low_carb2.php">Meal 2: Breakfast Sandwich</a>
        <a href="low_carb3.php">Meal 3: Chicken Shawarma Kebabs</a>
	</div>
 
    <div class="main-content">
        <h1>How to Make Chicken Shawarma Kebabs</h1>
        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/nE9jiT50lFQ?start=44" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>Chicken Shawarma served with grain-free Tabbouleh is a dish that gives you a perfect balace of protein whilst also giving you healthy vegetables on the side.
                   The Tabbouleh is optional but combined it makes a great taste of flavors </p>
                <b>Ingredients:</b>
                <p> </p>
                <b>For the Kebabs </b>
                <ol>
                    <li>8 chicken thighs, diced</li>
                    <li>1 tbsp olive oil</li>
                    <li>1 tbsp shawarma seasoning</li>
                    <li>1 tbsp dried parsley</li>
                    <li>Salt and pepper, to taste</li>
                </ol>
                <b>For the Tabbouleh</b>
                <ol>
                    <li>2 cups chopped fresh parsley</li>
                    <li>5 roma tomatoes, seeded and finely diced</li>
                    <li>1 cup chopped fresh mint</li>
                    <li>2 green onions, sliced</li>
                    <li>2 tbsp hemp hearts</li>
                    <li>2 tbsp olive oil</li>
                    <li>1/2 lemon, juice</li>
                    <li>1/2 cup labneh</li>
                    <li>1/2 cup Kalamata olives</li>
                </ol>

                <p></p>
            </div>
        </div>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Cooking Instructions</h2>
            </div>
            <div class="exercise-description">
                <p><b>Cook Time:</b> 1 Hour and 30 Minutes</p>
               <p> <b>Cooking Instructions</b> </p>
                <ol>
                    <li>In a large bowl, toss together the chicken, oil, lemon juice, shawarma seasoning, and parsley. Season with salt and pepper to taste.
                        Skewer the chicken and refrigerate for at least 1 hour before cooking.</li>
                    <li>Preheat the oven to 375ºF.</li>
                    <li>Arrange the skewers on a baking sheet. Bake the chicken until it is golden and reaches an internal temperature of 165ºF, about 25 to 30 minutes.</li>
                    <li>While the chicken is baking, in a large bowl, toss together the parsley, tomatoes, mint, green onions, hemp hearts, and lemon juice. Season with salt to taste.</li>
                    <li>Serve immediately with the labneh and Kalamata olives or store in the refrigerator for up to 3 days.</li>
                </ol>
                 <p></p>
            </div>
        </div>

    </div>

</body>
</html>
