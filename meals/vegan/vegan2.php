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
	<title>Quinoa Salad with Roasted Vegetables</title>
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
        <h1>Quinoa Salad with Roasted Vegetables</h1>
        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/NGVq3DgI1nM" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>Enjoy a refreshing and nutritious vegan salad with this quinoa dish.</p>
                <b>Ingredients:</b>
                <ol>
					<li>1 cup quinoa</li>
					<li>Assorted vegetables (such as zucchini, bell peppers, and cherry tomatoes)</li>
					<li>Olive oil</li>
					<li>Balsamic vinegar</li>
					<li>Fresh herbs (such as basil or parsley)</li>
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
					<li>Cook the quinoa according to package instructions and set aside.</li>
					<li>Preheat the oven to 400°F (200°C).</li>
					<li>Chop the vegetables into bite-sized pieces and toss them with olive oil, salt, and pepper.</li>
					<li>Spread the vegetables on a baking sheet and roast for about 20-25 minutes until tender.</li>
					<li>In a large bowl, combine the cooked quinoa, roasted vegetables, a drizzle of olive oil, a splash of balsamic vinegar, and fresh herbs.</li>
					<li>Toss everything together until well combined.</li>
					<li>Serve the quinoa salad as a light and refreshing vegan meal.</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->

 
</body>

</html>