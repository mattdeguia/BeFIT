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
	<title>Zucchini Noodle Stir-Fry</title>
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
		<a href="#" class="active">PALEO MEALS</a>
        <a href="paleo1.php">Meal 1: Baked Salmon with Roasted Vegetables</a>
        <a href="paleo2.php">Meal 2: Zucchini Noodle Stir-Fry</a>
        <a href="paleo3.php">Meal 3: Beef and Vegetable Stir-Fry</a>
	</div>

	<!-- MEAL -->
    <div class="main-content">
        <h1>Zucchini Noodle Stir-Fry</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/7rdLKmtXObQ" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>Enjoy this delicious and healthy way to enjoy stir-fry by using zucchini noodles instead!</p>
                <b>Ingredients:</b>
                <ol>
					<li>2 large zucchinis</li>
					<li>1 tablespoon coconut oil</li>
					<li>1 pound chicken breast (or your choice of protein)</li>
					<li>Assorted stir-fry vegetables (such as bell peppers, mushrooms, and snap peas)</li>
					<li>2 cloves garlic, minced</li>
					<li>2 tablespoons coconut aminos (a paleo-friendly alternative to soy sauce)</li>
					<li>Salt and pepper</li>
					<li>Optional toppings: sliced green onions, sesame seeds</li>
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
					<li>Use a spiralizer or julienne peeler to create zucchini noodles (zoodles) from the zucchinis.</li>
					<li>Heat coconut oil in a large skillet over medium-high heat.</li>
					<li>Add the chicken breast and cook until no longer pink in the center. Remove from the skillet and set aside.</li>
					<li>In the same skillet, add the minced garlic and stir-fry vegetables. Cook until the vegetables are tender-crisp.</li>
					<li>Return the cooked chicken to the skillet, add the zucchini noodles, and drizzle with coconut aminos.</li>
					<li>Season with salt and pepper to taste, then stir-fry for a few more minutes until the zoodles are heated through but still slightly crisp.</li>
					<li>Serve the zucchini noodle stir-fry hot and garnish with sliced green onions and sesame seeds if desired.</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->



	
 
</body>

</html>