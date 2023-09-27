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
	<title>Simple Seasame Salmon Salad</title>
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
        <h1>How to Make Seasame Salmon Salad</h1>
        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/SuuEpeKVOks?start=585" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>Looking for a delicious, colorful salad to brighten up your dinner? This sesame salmon salad is just the thing. It has all the Asian flavor but doesn’t use soy for
                   those of you who are avoiding it.If you are wanting to keep this for work lunches, keep the dressing separate otherwise it will get the lettuce leaves all soggy.</p>
                <b>Ingredients:</b>
                <p> </p>
                <b>For the Salad </b>
                <ol>
                    <li>1 medium head lettuce, chopped</li>
                    <li>1 medium red pepper, chopped</li>
                    <li>1 medium yellow pepper, chopped</li>
                    <li>2 large salmon filets (12oz each)</li>
                    <li>4 tbsp olive oil</li>
                    <li>1 tsp seasame oil</li>
                    <li>2 tbsp coconut aminos</li>
                    <li>1/4 cup green onions, chopped</li>
                </ol>
                <b>For the Dressing</b>
                <ol>
                    <li>4 tbsp olive oil</li>
                    <li>1 tsp seasame oil</li>
                    <li>5 tbsp coconut aminos</li>
                </ol>
                <p></p>
            </div>
        </div>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Cooking Instructions</h2>
            </div>
            <div class="exercise-description">
                <p><b>Cook Time:</b> 25 Minutes</p>
               <p> <b>Cooking Instructions</b> </p>
                <ol>
                    <li>Heat up the 3/4 of the olive oil for the salad in a pan over medium heat. Add the sesame oil, coconut oil, and liquid aminos.</li>
                    <li>If needed, cut your salmon into smaller pieces.</li>
                    <li>Place your salmon in the pan and let it cook for 5-7 minutes.</li>
                    <li>Flip them over and continue to cook for an additional 5 minutes. They should be a light pink to white color on the inside once they are done.</li>
                    <li>While your salmon is cooking, place your lettuce and peppers into a salad bowl.</li>
                    <li>In a smaller bowl - mix your dressing ingredients together.</li>
                    <li>Once the salmon is done, place on top of the salad, top with the dressing and enjoy!</li>
                </ol>
                 <p></p>
            </div>
        </div>

    </div>

</body>
</html>
