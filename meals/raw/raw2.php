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

	<title>Raw Rainbow Salad</title>
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
		<a href="#" class="active">RAW MEALS</a>
        <a href="raw1.php">Meal 1: Raw Zucchini Noodles with Pesto</a>
        <a href="raw2.php">Meal 2: Raw Rainbow Salad</a>
        <a href="raw3.php">Meal 3: Raw Energy Balls</a>
	</div>





	<!-- MEAL -->
    <div class="main-content">
        <h1>Raw Rainbow Salad</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/yJUrnzBSNog" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>An amazing and colorful salad that will brighten up any day of your week!</p>
                <b>Ingredients:</b>
                <ol>
					<li>Carrots, grated</li>
					<li>Cabbage, thinly sliced</li>
					<li>Bell peppers, thinly sliced</li>
					<li>Cucumber, diced</li>
					<li>Cherry tomatoes, halved</li>
					<li>Fresh herbs (such as parsley or cilantro), chopped</li>
					<li>Lemon juice</li>
					<li>Extra virgin olive oil</li>
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
					<li>In a large bowl, combine grated carrots, thinly sliced cabbage, bell peppers, diced cucumber, cherry tomatoes, and fresh herbs.</li>
					<li>Drizzle the salad with lemon juice and olive oil.</li>
					<li>Season with salt and pepper to taste.</li>
					<li>Toss everything together until well mixed.</li>
					<li>Enjoy this vibrant and nutrient-packed raw rainbow salad.</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->
 
</body>

</html>