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

	<title>Greek Salad with Grilled Chicken</title>
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
		<a href="#" class="active">MEDITERRANEAN MEALS</a>
        <a href="mediterranean1.php">Meal 1: Greek Salad with Grilled Chicken</a>
        <a href="mediterranean2.php">Meal 2: Mediterranean Quinoa Bowl</a>
        <a href="mediterranean3.php">Meal 3: Mediterranean Stuffed Bell Peppers</a>
	</div>





	<!-- MEAL -->
    <div class="main-content">
        <h1>Greek Salad with Grilled Chicken</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/M5tq0DOJ4YU" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>This delicious greek salad is sure to make your stomach full with healthy ingredients!</p>
                <b>Ingredients:</b>
                <ol>
					<li>Grilled chicken breast</li>
					<li>Romaine lettuce</li>
					<li>Cucumber, sliced</li>
					<li>Tomatoes, diced</li>
					<li>Red onion, thinly sliced</li>
					<li>Kalamata olives</li>
					<li>Feta cheese, crumbled</li>
					<li>Olive oil</li>
					<li>Lemon juice</li>
					<li>Dried oregano</li>
					<li>Salt and pepper</li>
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
					<li>Prepare the grilled chicken breast by marinating it in olive oil, lemon juice, dried oregano, salt, and pepper. Grill until cooked through and slice it into strips.</li>
					<li>In a large bowl, combine romaine lettuce, cucumber, tomatoes, red onion, and Kalamata olives.</li>
					<li>Toss the salad with olive oil, lemon juice, salt, and pepper.</li>
					<li>Top the salad with the grilled chicken breast strips and crumbled feta cheese.</li>
					<li>Serve this refreshing Greek salad as a light and satisfying Mediterranean meal.</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->
 
</body>

</html>