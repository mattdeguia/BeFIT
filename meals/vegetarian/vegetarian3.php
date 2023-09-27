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
    <title>Vegetarian Potato Hash</title>
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
		<a href="#" class="active">VEGETERIAN MEALS</a>
        <a href="vegetarian1.php">Meal 1: Pasta Al Limone</a>
        <a href="vegetarian2.php">Meal 2: Vegetarian Chili</a>
        <a href="vegetarian3.php">Meal 3: Potato Hash</a>
	</div>

    <div class="main-content">
        <h1>How to Make Potato Hash</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/R4kwxiDlKzs" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>We're going to be looking at a one-pot potato hash recipe filled with nutrients and packed with flavor to start your morning off right!</p>
                <b>Ingredients:</b>
                <ol>
                    <li>2 lbs russet or yukon gold potatoes, peeled and chopped</li>
                    <li>1/2 large onion, chopped</li>
                    <li>1 red bell pepper, chopped</li>
                    <li>Sage leaves, minced</li>
                    <li>4 large eggs</li>
                    <li>Fresh chives, minced</li>
                    <li>Kosher salt</li>
                    <li>Freshly ground pepper</li>
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
                    <li>Peel and chop 3 leftover baked potatoes (russet or Yukon golds) into 1/2” pieces. Also roughly chop 1/2 large white onion and red bell pepper.</li>
                    <li>Add in the onions and red peppers and saute over medium heat for 3-5 minutes until softened and the onions develop color.</li> 
                    <li>Add in the chopped potatoes and give a thorough toss, making sure the potatoes are evenly coated in fat. Press everything down into an even layer, 
                        and let sit over medium heat undisturbed for 2 minutes.</li>
                    <li>Using a firm sharp spatula, dig under the potatoes and flip them before patting them back down into an even layer. Let sit undisturbed for another 2 minutes.
                         Repeat this process about 4 times, until everything is cooked, crisp, and browned.</li> 
                    <li>Before the final flip, add in a couple finely minced fresh sage leaves.</li> 
                    <li>Give the hash a flip and thoroughly mix to combine before digging 4 small divots in the mixture. Crack in 4 eggs, one into each divot.</li>
                    <li>Cover and cook over medium-low heat for 4-5 minutes, or until the whites are set and the yolks are still runny.</li>
                    <li>In addition to kosher salt and freshly ground pepper, finish the potato hash with fresh minced chives.</li>
                </ol>
                <p></p>
            </div>
        </div>

    </div>

</body>
</html>
