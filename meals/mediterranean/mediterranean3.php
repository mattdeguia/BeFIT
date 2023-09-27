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

	<title>Mediterranean Stuffed Bell Peppers</title>
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
        <h1>Mediterranean Stuffed Bell Peppers</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/hdyqm8qrPDU" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>If you love bell peppers and mediterranean food, this meal is for you!</p>
                <b>Ingredients:</b>
                <ol>
					<li>Bell peppers</li>
					<li>Cooked quinoa or couscous</li>
					<li>Chickpeas, cooked or canned</li>
					<li>Sun-dried tomatoes, chopped</li>
					<li>Kalamata olives, chopped</li>
					<li>Fresh parsley, chopped</li>
					<li>Lemon juice</li>
					<li>Olive oil</li>
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
					<li>Preheat the oven to 375°F (190°C).</li>
					<li>Cut the tops off the bell peppers and remove the seeds and membranes.</li>
					<li>In a bowl, combine cooked quinoa or couscous, chickpeas, sun-dried tomatoes, Kalamata olives, fresh parsley, lemon juice, olive oil, salt, and pepper.</li>
					<li>Stuff the mixture into the bell peppers and place them in a baking dish.</li>
					<li>Bake for about 25-30 minutes until the bell peppers are tender and slightly charred.</li>
					<li>Serve these delicious Mediterranean stuffed bell peppers as a satisfying and colorful meal.</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->
 
</body>

</html>