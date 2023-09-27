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
        <h1>How to Make a Low Carb Breakfast Sandwich</h1>
        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/yBrTH7866mw?start=268" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>This low-carb breakfast sandwich uses homemade gluten-free biscuts to enhance your breakfast experience. TOpping your sandwich with turkey bacon, scrambled eggs,
                   and chedder cheese makes the perfect breakfast sandwich to keep you full and satiated!</p>
                <b>Ingredients:</b>
                <ol>
                    <li>1 1/2 cups of almond flour</li>
                    <li>1 tbsp of baking powder</li>
                    <li>1 tsp dried parsley</li>
                    <li>1/4 tsp tsp salt</li>
                    <li>2 large eggs</li>
                    <li>1/3 cup sour cream</li>
                    <li>1/4 cup melted butter</li>
                    <li>1/3 shredded cheddar cheese</li>
                    <li>6 turkey bacon slices, cooked</li>
                    <li>6 large eggs, scrambled</li>
                    <li>6 slices cheddar cheese</li>
                </ol>
                <p></p>
            </div>
        </div>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Cooking Instructions</h2>
            </div>
            <div class="exercise-description">
                <p><b>Cook Time:</b> 20 Minutes</p>
               <p> <b>Cooking Instructions</b> </p>
                <ol>
                    <li>Preheat the oven to 400ºF. Line a baking sheet with parchment paper. Set it aside.</li>
                    <li>In a large bowl, whisk together the almond flour, baking powder, dried parsley, garlic powder, and salt. Set it aside.</li>
                    <li>In another bowl, whisk together two eggs, sour cream, and butter. Pour the egg mixture into the almond flour mixture and fold in the shredded cheddar cheese.
                        Scoop the mixture onto the baking sheet. Bake the biscuits until they are lightly golden, about 10 to 12 minutes.</li>
                    <li>Serve immediately filled with the turkey bacon, scrambled egs, and cheddar cheese slices.<b> (Serves 6)</li>
                </ol>
                 <p></p>
            </div>
        </div>

    </div>

</body>
</html>
