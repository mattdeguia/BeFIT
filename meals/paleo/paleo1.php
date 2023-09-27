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
    
	<title>Baked Salmon with Roasted Vegetables</title>
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
        <h1>Baked Salmon with Roasted Vegetables</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qvfCWVh31Mg" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>This great meal features juicy baked salmon and colorful roasted veggies.</p>
                <b>Ingredients:</b>
                <ol>
					<li>2 salmon fillets</li>
					<li>Assorted vegetables (such as broccoli, bell peppers, and carrots)</li>
					<li>Olive oil</li>
					<li>Lemon juice</li>
					<li>Salt and pepper</li>
					<li>Fresh herbs (optional)</li>
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
					<li>Preheat the oven to 400°F (200°C).</li>
					<li>Place the salmon fillets on a baking sheet lined with parchment paper.</li>
					<li>Drizzle the salmon with olive oil and lemon juice, then season with salt, pepper, and your choice of fresh herbs.</li>
					<li>Chop the vegetables into bite-sized pieces and toss them with olive oil, salt, and pepper.</li>
					<li>Spread the vegetables on another baking sheet.</li>
					<li>Place both the salmon and vegetables in the oven and bake for about 15-20 minutes, or until the salmon is cooked through and the vegetables are tender.</li>
					<li>Serve the baked salmon with roasted vegetables and enjoy!</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->



	
 
</body>

</html>