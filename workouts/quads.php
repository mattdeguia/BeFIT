<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../workouts.css">
    <title>Quads Workout</title>
    <style>
        .sidebar {
            position: fixed;
            top: 50px;
            left: 20px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            font-weight: bold;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .sidebar a {
            color: #007BFF;
            text-decoration: none;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .sidebar .line {
            margin-top: 5px;
            border-top: 1px solid #ccc;
        }
        pre {
            background-color: #eaeaea;
            padding: 10px;
            border-radius: 5px;
        }
        code {
            font-family: Courier, monospace;
        }
        .center {
            text-align: center;
        }
        .image-container {
            display: flex;
            justify-content: space-between;
        }
        .image-container img {
            width: 45%;
        }
      </style>
  </head>
  <body>
    <nav>
      <ul>
        <div class="left_workouts">
          <li>
            <img src="../images/go_back.png">
            <a href="../workouts.php">Go back to workouts</a>
          </li>
        </div>
      </ul>
    </nav>

    <div class="sidebar">
      <a href="#prisoner">Prisoner Squat</a><br>
      <a href="#bulgarian">Bulgarian Split Squat</a><br>
      <a href="#goblet">Goblet Squat</a><br>
      <a href="#walking">Walking Lunge</a><br>
      <a href="#leg_press">Leg Press</a><br>
      <a href="#resistance">Resistance Band Press</a><br>
      <a href="#top">Top of Page</a>
      <div id="timer">Rest Timer: <span id="seconds">60</span> seconds</div>
      <button id="startTimer">Start Timer</button>
    </div>

    <div class="exercise-details" id="prisoner">
      <h1>Quads Exercises</h1>
      <div class="exercise-container">
        <div class="exercise-video">
          <h2>1. Prisoner Squat</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/UYbsgiiZgao" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <h2>Instructions:</h2>
          <ol>
            <li>Stand with your feet shoulder-width apart, place your hands behind your head and interlock your fingers.</li>
            <li>Keeping your chest up, back straight, and engage your core as you bend your knees and lower your hips back and down.</li>
            <li>Lower yourself until your thighs are parallel to the floor, or as far as comfortable.</li>
            <li>Press through your heels to return to the starting position, straightening your legs and fully extending your hips.</li>
          </ol>
          <h2>Repetitions:</h2>
          <p>Perform 3 sets of 12-15 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="bulgarian">
        <div class="exercise-video">
          <h2>2. Bulgarian Split Squat</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/hbw7hdyOpq0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <h2>Instructions:</h2>
          <ol>
            <li>Stand facing away from a bench or chair, with one foot on the bench and the other foot on the ground.</li>
            <li>Keep your chest up and engage your core as you lower your back knee down towards the ground.</li>
            <li>Lower yourself until your front thigh is parallel to the ground, or as far as comfortable.</li>
            <li>Press through your front heel to return to the starting position, fully extending your front leg.</li>
          </ol>
          <h2>Repetitions:</h2>
          <p>Perform 3 sets of 10-12 reps per leg, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="goblet">
        <div class="exercise-video">
          <h2>3. Goblet Squat</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/9W5KAqHfDe8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <h2>Instructions:</h2>
          <ol>
            <li>Stand with your feet shoulder-width apart, holding a kettlebell or dumbbell close to your chest.</li>
            <li>Lower yourself into a squat by bending your knees and pushing your hips back, keeping your chest up and core engaged.</li>
            <li>Descend until your thighs are parallel to the ground, or as far as comfortable.</li>
            <li>Press through your heels to return to the starting position, fully extending your legs and hips.</li>
          </ol>
          <h2>Repetitions:</h2>
          <p>Perform 3 sets of 12-15 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="walking">
        <div class="exercise-video">
          <h2>4. Walking Lunge</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/L8fvypPrzzs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <h2>Instructions:</h2>
          <ol>
            <li>Stand with your feet hip-width apart, hands on your hips or holding dumbbells at your sides.</li>
            <li>Take a step forward with one foot, bending both knees to lower yourself into a lunge.</li>
            <li>Your front thigh should be parallel to the ground, and your back knee should hover just above the ground.</li>
            <li>Push through your front heel to stand back up, stepping forward with your back foot to move into the next lunge.</li>
            <li>Continue walking forward, alternating legs with each step.</li>
          </ol>
          <h2>Repetitions:</h2>
          <p>Perform 3 sets of 10-12 reps per leg, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="leg_press">
        <div class="exercise-video">
          <h2>5. Leg Press</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/IZxyjW7MPJQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <h2>Instructions:</h2>
          <ol>
            <li>Position yourself on a leg press machine with your feet shoulder-width apart on the platform.</li>
            <li>Release the safety handles and lower the platform by bending your knees, keeping your chest up and core engaged.</li>
            <li>Lower the platform until your knees form a 90-degree angle, or as far as comfortable.</li>
            <li>Press through your heels to extend your legs and push the platform back up to the starting position.</li>
          </ol>
          <h2>Repetitions:</h2>
          <p>Perform 3 sets of 10-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="resistance">
        <div class="exercise-video">
          <h2>6. Resistance Band Leg Press</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/qp_RtWjHsV8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <h2>Instructions:</h2>
          <ol>
            <li>Anchor a resistance band to a sturdy object, such as a pole or door frame.</li>
            <li>Attach the other end of the band to your ankle, standing far enough away from the anchor point to create tension in the band.</li>
            <li>Step forward with your other foot, keeping your feet hip-width apart.</li>
            <li>Bend your knees and lower your hips back and down, pressing your anchored foot back behind you.</li>
            <li>Lower yourself until your thighs are parallel to the floor, or as far as comfortable.</li>
            <li>Press through your front heel to return to the starting position, fully extending your legs and hips.</li>
          </ol>
          <h2>Repetitions:</h2>
          <p>Perform 3 sets of 10-12 reps per leg, with a 60-second rest between sets.</p>
        </div>
      </div>
    </div>
    <script>
      var seconds = 60;
      var timer;

      function countDown() {
        document.getElementById('seconds').innerText = seconds;
        seconds--;
        if (seconds < 0) {
          clearInterval(timer);  // stop the timer
        }
      }

      document.getElementById('startTimer').addEventListener('click', function() {
        clearInterval(timer);  // clear any existing timer before starting a new one
        seconds = 60;  // reset the seconds
        document.getElementById('seconds').innerText = seconds; // update the display
        timer = setInterval(countDown, 1000);  // start the countdown
      });
    </script>
  </body>
</html>