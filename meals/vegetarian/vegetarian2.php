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
    <title>Vegetarian Chili</title>
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
        <h1>How to Make Vegetarian Chili</h1>

        <div class="exercise-container">
            <div class="exercise-video">
                <h2>Video Guide</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/4BTm1Ezl6XE?start=340" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="exercise-description">
                <p>Vegitarian Chili using a homemade vegetable stock. The blend of ingredients will leave you both impressed and satisfied with the chili's richness of flavor.</p>
                <b>Ingredients:</b>
                <p> </p>
                <b>For the Vegetable Stock </b>
                <ol>
                    <li>1 white onion
                    <li>4 ribs celery
                    <li>1 bulb fennel
                    <li>1 parsnip, peeled
                    <li>3 carrots
                    <li>1 leek
                    <li>1 small head cauliflower
                    <li>2 beets
                    <li>Vegetable oil
                    <li>Sprigs of fresh thyme
                    <li>Small head of garlic, halved
                    <li>1 bunch parsley
                    <li>2 dried bay leaves
                    <li>1 Tbsp whole black peppercorns
                    <li>1 handful dried porcini mushrooms
                    <li>2 sheets dried kombu 
                </ol>
                <b>For the Vegetarian Chili</b>
                <ol>
                    <li>4 tbsp olive oil</li>
                    <li>4 tbsp olive oil</li>
                    <li>4 tbsp olive oil</li>
                    <li>4 tbsp olive oil</li>
                    <li>4 tbsp olive oil</li>
                    <li>4 tbsp olive oil</li>
                    <li>4 tbsp olive oil</li>
                    <li>1 tsp seasame oil</li>
                    <li>5 tbsp coconut aminos</li>
                    <li>2 pasilla chiles (dried whole)</li>
                    <li>4 arbol chiles (dried whole)</li>
                    <li>4 chipotle chiles (dried whole)</li>
                    <li>3 guajillo chiles (dried whole)</li>
                    <li>3 ancho chiles (dried whole)</li>
                    <li>2 dried porcini mushrooms</li>
                    <li>3 poblano peppers</li>
                    <li>3 jalapeno peppers</li>
                    <li>2 large onions, roughly chopped</li>
                    <li>Olive oil</li>
                    <li>6-7 cloves garlic, roughly chopped</li>
                    <li>2-3 Tbsp tomato paste</li>
                    <li>3 tsp toasted cumin</li>
                    <li>Ground coriander</li>
                    <li>Dried oregano</li>
                    <li>1 can cannellini beans, drained and rinsed</li>
                    <li>1 can kidney beans, drained and rinsed</li>
                    <li>1 can pinto beans, drained and rinsed</li>
                    <li>14oz can diced tomatoes</li>
                    <li>14oz can fire-roasted diced tomatoes</li>
                    <li>1 tsp liquid aminos</li>
                    <li>2 Tbsp nutritional yeast</li>
                    <li>3 cups vegetable stock (ingredients above)</li>
                    <li>Sour cream and sliced jalapenos, for garnish</li> 
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
                <li>To make homemade vegetable stock, thinly slice all vegetables using a mandoline. Put all of the vegetable slices in a large bowl and drizzle with vegetable oil. Stir to make sure every piece is evenly coated with oil.</li>
                    <li>Preheat your oven to 375ºF. Spread vegetable slices out evenly onto 2 large rimmed baking sheets. Roast for anywhere from 30 minutes to 1 hour. Remove from the oven and toss every 15 minutes so that nothing burns.</li>
                    <li>Add the roasted vegetables to a large dutch oven or stockpot. Add thyme, garlic, parsley, bay leaves, and peppercorns.</li>
                    <li>Cover with cold water and bring to a simmer. Also add umami boosters now, like dried porcini mushrooms and kombu.</li>
                    <li>Let simmer for 45 minutes-1 hour, and then strain. Now you have homemade vegetable stock!</li>
                    <li>Remove the stems and seeds from all dried chiles. Tear each chile into small pieces.</li>
                    <li>Dry roast the chiles by placing them in a large stainless steel skillet with no oil. Toast over medium-high heat for 3-5 minutes, until they are fragrant but not smoking. </li>
                    <li>Lower the heat and rehydrate the chiles by covering them with water – just enough water to cover them.</li>
                    <li>Bring to a simmer and cover. Then turn off the heat and let steep for 10 minutes.</li>
                    <li>Add the chiles and their soaking liquid to a high-powered blender. Also add a few dried porcini mushrooms. Blend on high speed for about one minute, until nice and smooth. This makes your amazing chili paste base.</li>
                    <li>Fire roast your poblanos by placing them directly over a flame. The goal is to completely char the skin of the peppers, so keep turning them until every side is sufficiently blackened.</li>
                    <li>Remove peppers from the heat and wrap in aluminum foil. Let them sit for at least 10 minutes.</li>
                    <li>Prepare the jalapenos by cutting them in half and removing the seeds and ribs. Then finely dice them. Set aside. </li>
                    <li>Remove the charred skin from the steamed poblano peppers using Bounty paper towels. Then, chop the peppers into bite-sized pieces.</li>
                    <li>Heat olive oil in a dutch oven over medium-high heat. Add roughly chopped onions and cook until softened.</li>
                    <li>Add crushed garlic and cook until fragrant, about one minute.</li>
                    <li>Next, add chopped jalapeno and poblano peppers along with 2-3 tablespoons of tomato paste. Stir to combine for a few minutes.</li>
                    <li>Add the spices: cumin, ground coriander, and dried oregano. Then, add all of the beans and diced tomatoes</li>
                    <li>Add 3 cups of homemade vegetable stock, or enough to make the chili a little waterier than you’d like it to be.</li>
                    <li>Add 1 - 1 1/2 cups of homemade chili paste. Stir to combine. Let simmer for 45-60 minutes.</li>
                    <li>Add the final umami boosters: liquid aminos and nutritional yeast. Stir to combine.</li>
                    <li>Serve with your favorite garnishes like sour cream and sliced jalapenos. </li>
                </ol>
                <p></p>
            </div>
        </div>

    </div>

</body>
</html>
