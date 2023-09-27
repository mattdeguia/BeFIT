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
    <title>Vegetarian Pasta Al Limone Recipe</title>
</head>
<body>

    <nav>
        <ul>
            <div class="left_workouts">
                <li>
                    <img src="../../images/go_back.png">
                    <a href="../../meals.php">Go back to meals</a></li>
            </div>
        </ul>
    </nav>

	<!-- Sidebar navigation -->
	<div class="sidebar">
		<a href="#" class="active">VEGETERIAN MEALS</a>
        <a href="vegetarian1.php">Meal 1: Pasta Al Limone</a>
        <a href="vegetarian2.php">Meal 2: Vegetarian Chili</a>
        <a href="vegetarian3.php">Meal 3: Potato Hash</a>
	</div>

    <div class="main-content">
        <h1>How to Make Pasta Al Limone</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="948" height="533" src="https://www.youtube.com/embed/I2MfxX0N7dQ?list=PLopY4n17t8RA67oFo829JaDApWd4_XRnE" title="Pasta Al Limone | Basics with Babish" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="exercise-description">
                <p>Pasta Al Limone is a vegetarian alternative to a healthy pasta dish that is both quick and affordable.</p>
                <b>Original Ingredients:</b>
                <ol>
                    <li>1 clove garlic, peeled and sliced</li>
                    <li>Parsley, chopped</li>
                    <li>1 large lemon</li>
                    <li>Pasta</li>
                    <li>Olive oil</li>
                    <li>1 tsp chili flakes</li>
                    <li>1 lage lemon zest, separately</li>
                    <li>Freshly gound black pepper</li>
                    <li>Kosher salt</li>
                    <li>2-3 oz. permesan cheese, grated</li>
                </ol>
                <b>Homemade Pasta Ingredients(Optional)</b>
                <ol>
                    <li>All-purpose flour</li>
                    <li>3 eggs</li>
                    <li>Salt</li>
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
                    <li>Start by peeling and thinly slicing 1 large clove of garlic. Then, roughly or finely chop some fresh parsley and roll 1 large lemon along a work surface before cutting it in half. </li>
                    <b>If using homemade pasta, follow steps 2-4</b>
                    <li>in a large amount of all-purpose flour shaped into a crater, crack in 3 eggs, a pinch of salt and begin mixing it until a slurry forms. Toss it together until a ball of dough forms. Knead continuously for 7-10 minutes. Wrap in plastic wrap and let sit at room temperature for 30 minutes. </li>
                    <li>To roll out, generously flour the dough and work surface before rolling the dough out with a roller to a thickness of 1 ml. Generously flour and fold like an accordion, making sure that each fold does not overlap.</li>
                    <li>Using a sharp knife, slice the dough into the desired size before unfolding and twisting into nests to prevent pasta kinks.  </li>
                    <li>In a sauce pot, bring just enough water to cover the pasta to a boil before adding in the pasta. Make sure to stir after adding the pasta to ensure no sticking.</li>
                    <li>For the Al Limone sauce, add 2-3 tablespoons of olive oil to a high-walled saute pan. In addition, add the sliced garlic from earlier, 1 teaspoon of chili flakes, the zest of 1 lemon, and some freshly ground black pepper. Cook for 3-5 minutes. </li>
                    <li>Once the garlic is a light blonde, dump in the pasta if using store-bought (1-2 minutes shy of being done), and if using fresh pasta only boil for 30 seconds before adding. </li>
                    <li>Once pasta is added, give everything a toss to fully incorporate everything.</li>
                    <li>After everything has been combined, add in ¼ cup of boiling pasta water and toss together. Add a splash at a time as necessary, checking to see if it's too thick or thin. If too thick, add more pasta water. If too thin, add more cheese. Season with kosher salt.</li>
                    <li>Once the sauce has reached the desired consistency, twist up and serve. Garnish with extra grated Parmigiano Reggiano, chopped parsley, and grated lemon zest.</li>
                </ol>
                <p></p>
            </div>
        </div>

    </div>

</body>
</html>
