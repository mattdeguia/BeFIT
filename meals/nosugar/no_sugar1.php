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
    <title>Sugar Free Apple Pie</title>
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
		<a href="#" class="active">NO SUGAR MEALS</a>
        <a href="no_sugar1.php">Meal 1: Sugar Free Apple Pie</a>
        <a href="no_sugar2.php">Meal 2: Sugar Free Peanut Butter Cookies</a>
        <a href="no_sugar3.php">Meal 3: Chicken Sweet Corn Soup</a>
	</div>

    <div class="main-content">
        <h1>How to Make Sugar Free Apple Pie</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xZVHs6hbapo" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>Looking for something to satify your sweet tooth while on a no sugar diet? This apple pie recipe will do exactly that without having a cheat meal!</p>
                <b>Ingredients:</b>
                <p> </p>
                <b>For the Pie Dough </b>
                <ol>
                    <li>3 cups flour</li>
                    <li>1/2 tsp salt</li>
                    <li>200g butter</li>
                    <li>8 tbsp ice water, or as needed</li>
                </ol>
                <b>For the Filling</b>
                <ol>
                    <li>1.3 kg golden delicious apple, cored, sliced, peeled</li>
                    <li>Stevia (the equivalent of 180 g sugar)</li>
                    <li>2 tsp cinnamon</li>
                    <li>1 tbsp lemon juice</li>
                    <li>30g butter</li>
                    <li>1 egg yolk</li>
                    <li>1 tbsp milk</li>
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
                    <li>In a medium-sized bowl, mix the flour and salt with a fork. Add the cubed butter and break it up into flour with a fork. Form the crumbs with a fork or with your 
                    hand.Gradually add the ice water and continue to mix until the dough starts to come together. You may not need all of the water, but if the dough is too dry then add
                    more. The dough should not be very tacky or sticky.</li>
                    <li>Work the dough together with your hands into a ball. Cut the pie into 2 parts, and cover with cling wrap. Refrigerate for 30 minutes.</li>
                    <li>Peel the apples, then core and slice.</li>
                    <li>In a bowl, add the sliced apples, stevia or sugar, cinnamon, and lemon juice. Mix until combined. Add the butter to the pan, add the apple filling and caramelize for 5 min.</li>
                    <li>Preheat the oven to 355°F.</li>
                    <li>On a floured surface roll the dough.</li> 
                    <li>Roll the dough around the rolling pin and unroll onto a pie dish making sure the dough reaches all edges. Cut the excess dough. Put in the fridge for 30 minutes.</li>
                    <li>Pour in apple filling mixture and pat down.</li>
                    <li>Repeat the same rolling process. Use a knife to cut the dough into strips of about ½-inch width.</li> 
                    <li>Arrange rows of strips across the top of your pie. Fold over every other strip halfway up and place another strip of pastry across.
                        Unfold the strips then fold over the other strips. Repeat this process until the latex is complete.</li>
                    <li>Trim the extra dough from the edges. Make sure edges are sealed together.</li>
                    <li>Brush the pie with the beaten egg and milk.</li>
                    <li>Bake pie for 45 minutes or until the crust is golden brown.</li>
                    <li>Allow cooling completely before slicing.</li>

                </ol>
                <p></p>
            </div>
        </div>

    </div>

</body>
</html>
