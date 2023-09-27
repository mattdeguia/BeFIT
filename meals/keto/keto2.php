<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../workouts.css">
    <title>Simple Enchilada Recipe</title>
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
		<a href="#" class="active">KETO MEALS</a>
        <a href="keto1.php">Meal 1: Chicken Stir Fry</a>
        <a href="keto2.php">Meal 2: Enchiladas</a>
        <a href="keto3.php">Meal 3: Salmon Poke Bowl</a>
	</div>

    <div class="main-content">
        <h1>How to Make Keto Enchiladas</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/BNmHWNykehI?start=425" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>Putting a spin on traditional enchiladas by using slices of ham to substitute for tortillas.</p>
                <b>Ingredients:</b>
                <ol>
                    <li>1/2 lb ground beef</li>
                    <li>1/2 lb ground pork</li>
                    <li>12 slices of deli ham</li>
                    <li>4 oz diced green chillies</li>
                    <li>1 tsp onion powder</li>
                    <li>1 tsp garlic powder</li>
                    <li>Salt and petter, to taste</li>
                    <li>8 oz red enchilada sauce</li>
                    <li>1/2 cup Monterey jack cheese</li>
                    <li><b>Optional: </b>Avocado and sour cream</li>
                </ol>
                <p></p>
            </div>
        </div>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Cooking Instructions</h2>
            </div>
            <div class="exercise-description">
                <p><b>Cook Time:</b> 40 Minutes</p>
               <p> <b>Cooking Instructions</b> </p>
                <ol>
                    <li>Preheat your oven to 375F, and heat up a skillet over medium-high heat on the stove.</li>
                    <li>Add the ground beef and pork to the skillet, break up the meat into small chunks as it starts to brown. Mix in the green chilies,
                        onion powder, garlic powder, salt, and pepper. Continue cooking until fully cooked through, 
                        then remove the skillet from the heat and allow to cool enough to handle.</li>
                    <li>Spoon some of the enchilada sauce on the bottom of a casserole pan. 
                        Lay out the slices of ham then spoon a bit of the cooked meat mixture onto each slice. Roll up then place the seam side down when adding 
                        to the casserole dish. If you have leftover meat then add it on top of the rolled slices.</li>
                    <li>Pour the rest of the enchilada sauce over the top of the rolls, 
                        make sure that all of the edges are covered then sprinkle the cheese over the top.</li>
                    <li>Bake for 15-20 minutes or until the cheese had melted and browned. Serve with avocado and sour cream.</li>
                </ol>
                <p></p>
            </div>
        </div>

    </div>

</body>
</html>
