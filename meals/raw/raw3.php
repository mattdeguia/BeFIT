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

	<title>Raw Energy Balls</title>
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
        <h1>Raw Energy Balls</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xkcPNZ1brKc" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>If you need a quick boost of energy, be sure to try out these simple and raw energy balls!</p>
                <b>Ingredients:</b>
                <ol>
					<li>Medjool dates, pitted</li>
					<li>Almonds</li>
					<li>Cashews</li>
					<li>Rolled oats</li>
					<li>Chia seeds</li>
					<li>Coconut flakes</li>
					<li>Cocoa powder (optional)</li>
Vanilla extract (optional)
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
					<li>In a food processor, combine Medjool dates, almonds, cashews, rolled oats, chia seeds, coconut flakes, cocoa powder (if desired), and vanilla extract (if desired).</li>
					<li>Process until the mixture comes together and forms a sticky dough.</li>
					<li>Scoop small portions of the dough and roll them into bite-sized balls.</li>
					<li>Place the energy balls in an airtight container and refrigerate for at least 30 minutes to firm up.</li>
					<li>These raw energy balls make for a nutritious and satisfying snack or dessert.</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->
 
</body>

</html>