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

	<title>Raw Zucchini Noodles with Pesto</title>
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
        <h1>Raw Zucchini Noodles with Pesto</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/J963TiqFuNA" title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>This delicious and raw dish requires no heating in the process, making it a quick and easy meal.</p>
                <b>Ingredients:</b>
                <ol>
					<li>Zucchini</li>
					<li>Fresh basil leaves</li>
					<li>Pine nuts</li>
					<li>Garlic cloves</li>
					<li>Extra virgin olive oil</li>
					<li>Lemon juice</li>
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
					<li>Use a spiralizer or a julienne peeler to create zucchini noodles.</li>
					<li>In a food processor, combine fresh basil leaves, pine nuts, garlic cloves, and a drizzle of olive oil.</li>
					<li>Pulse until well combined and creamy.</li>
					<li>Add lemon juice, salt, and pepper to taste.</li>
					<li>Toss the zucchini noodles with the pesto sauce until evenly coated.</li>
					<li>Serve this refreshing and vibrant raw dish as a light and healthy meal.</li>
                </ol>
                <p></p>
            </div>
        </div>
    </div>
	<!-- END -->
 
</body>

</html>