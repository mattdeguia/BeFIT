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

	<title>Lentil and Vegetable Stir-Fry</title>
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
		<a href="#" class="active">VEGAN MEALS</a>
        <a href="vegan1.php">Meal 1: Chickpea Curry with Coconut Rice</a>
        <a href="vegan2.php">Meal 2: Quinoa Salad with Roasted Vegetables</a>
        <a href="vegan3.php">Meal 3: Lentil and Vegetable Stir-Fry</a>
	</div>





	<!-- MEAL -->
    <div class="main-content">
        <h1>Lentil and Vegetable Stir-Fry</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UaEogCDFV7c" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>Try these cooked lentils inside a mix of stir-fry vegetables that's tossed together in a delicious sauce.</p>
                <b>Ingredients:</b>
                <ol>
					<li>1 cup dried lentils, cooked according to package instructions</li>
					<li>Assorted stir-fry vegetables (such as broccoli, carrots, and snap peas)</li>
					<li>2 cloves garlic, minced</li>
					<li>2 tablespoons soy sauce or tamari</li>
					<li>1 tablespoon sesame oil</li>
					<li>1 tablespoon maple syrup or agave nectar</li>
					<li>Sesame seeds for garnish (optional)</li>
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
					<li>In a large skillet or wok, heat sesame oil over medium-high heat.</li>
					<li>Add the minced garlic and stir-fry vegetables. Cook until the vegetables are tender-crisp.</li>
					<li>Stir in the cooked lentils.</li>
					<li>In a small bowl, whisk together soy sauce or tamari and maple syrup or agave nectar.</li>
					<li>Pour the sauce over the lentil and vegetable mixture in the skillet, tossing to coat everything evenly.</li>
					<li>Cook for a few more minutes until everything is heated through and the flavors meld together.</li>
					<li>Serve the lentil and vegetable stir-fry hot, garnished with sesame seeds if desired.</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->

 
</body>

</html>