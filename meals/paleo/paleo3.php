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
	<title>Beef and Vegetable Stir-Fry</title>
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
        <h1>Beef and Vegetable Stir-Fry</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/pPs_SUkouOs" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>This quick and tasty stir-fry is packed with protein and veggies.</p>
                <b>Ingredients:</b>
                <ol>
					<li>1 pound beef sirloin or flank steak, thinly sliced</li>
					<li>2 tablespoons coconut oil</li>
					<li>2 bell peppers, sliced</li>
					<li>1 onion, sliced</li>
					<li>2 cups broccoli florets</li>
					<li>2 cloves garlic, minced</li>
					<li>2 tablespoons coconut aminos</li>
					<li>1 tablespoon arrowroot powder (optional, for thickening the sauce)</li>
					<li>Salt and pepper</li>
					<li>Optional toppings: chopped green onions, sesame seeds</li>
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
					<li>Heat coconut oil in a large skillet or wok over medium-high heat.</li>
					<li>Add the sliced beef and cook until browned. Remove from the skillet and set aside.</li>
					<li>In the same skillet, add the sliced bell peppers, onion, and broccoli. Stir-fry until the vegetables are tender-crisp.</li>
					<li>Add the minced garlic and stir-fry for an additional minute.</li>
					<li>In a small bowl, whisk together coconut aminos and arrowroot powder. Pour the sauce into the skillet and stir until it thickens.</li>
					<li>Return the cooked beef to the skillet, season with salt and pepper to taste, and stir-fry for a few more minutes until everything is heated through.</li>
					<li>Serve the beef and vegetable stir-fry hot and garnish with chopped green onions and sesame seeds if desired.</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->



	
 
</body>

</html>