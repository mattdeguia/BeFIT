<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../workouts.css">
    <title>Biceps Workout</title>
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
      <a href="#dumbbell_curls">Dumbbell Hammer Curls</a><br>
      <a href="#preacher_curls">Dubbell Preacher Curls</a><br>
      <a href="#bicep_curls">Standing Bicep Curls</a><br>
      <a href="#seated_curls">Seated Dumbbell Curls</a><br>
      <a href="#incline_curls">Incline Dumbbell Curls</a><br>
      <a href="#top">Top of Page</a>
      <div id="timer">Rest Timer: <span id="seconds">60</span> seconds</div>
      <button id="startTimer">Start Timer</button>
    </div>

    <div class="exercise-details">
      <h1>Biceps Exercises</h1>
      <div class="exercise-container" id="dumbbell_curls">
        <div class="exercise-video">
          <h2>1. Dumbbell Hammer Curls</h2>
          <iframe src="https://www.youtube.com/embed/CFBZ4jN1CMI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Hammer Curls are a variation of the classic bicep curl that targets the brachialis and brachioradialis muscles in addition to the biceps. This exercise helps develop overall arm strength and size.</p>
          <ol>
            <li>Stand with your feet shoulder-width apart, holding a dumbbell in each hand with your palms facing your thighs.</li>
            <li>Keep your elbows close to your torso and maintain a slight bend in your knees.</li>
            <li>Slowly curl the dumbbells up towards your shoulders, keeping your palms facing inward throughout the movement.</li>
            <li>Pause at the top of the movement, then slowly lower the dumbbells back to the starting position.</li>
            <li>Repeat for the desired number of repetitions.</li>
          </ol>
          <h2>Repetitions:</h2>
          <p>Perform 3 sets of 10-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="preacher_curls">
        <div class="exercise-video">
          <h2>2. Dumbbell Preacher Curls</h2>
          <iframe src="https://www.youtube.com/embed/t2BmBSmcjco" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Dumbbell Preacher Curls is an isolation exercise that targets the biceps brachii muscles. It helps improve bicep peak and overall bicep definition.</p>
          <ol>
            <li>Set up a preacher bench at a comfortable height and adjust the seat to your preference.</li>
            <li>Hold a dumbbell in one hand and rest your arm on the bench pad, allowing your elbow to bend and the weight to hang down towards the floor.</li>
            <li>Curl the dumbbell up towards your shoulder, keeping your upper arm and elbow stationary and only moving your forearm.</li>
            <li>Squeeze your bicep at the top of the movement, then slowly lower the weight back to the starting position.</li>
            <li>Repeat for the desired number of repetitions, then switch to the other arm.</li>
          </ol>
          <h2>Repetitions:</h2>
          <p>Reps: 3 sets of 10-12 reps per arm, with a 60-second rest between sets.</p>
        </div>
      </div>
      <!-- Exercise 3: Standing Resistance Band Bicep Curls -->
      <div class="exercise-container" id="bicep_curls">
        <div class="exercise-video">
          <h2>3. Standing Resistance Band Bicep Curls</h2>
          <iframe src="https://www.youtube.com/embed/PXLF19Oqe3M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Standing Resistance Band Bicep Curls are a versatile exercise that targets the biceps using a resistance band, making it easy to adjust the difficulty level.</p>
          <ol>
            <li>Stand with both feet on the center of a resistance band, shoulder-width apart.</li>
            <li>Hold the ends of the band with your palms facing forward and your arms extended by your sides.</li>
            <li>Keep your elbows close to your torso and curl your hands towards your shoulders, contracting your biceps.</li>
            <li>Slowly lower your hands back to the starting position and repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 10-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <!-- Exercise 4: Seated Alternating Dumbbell Curls -->
      <div class="exercise-container" id="seated_curls">
        <div class="exercise-video">
          <h2>4. Seated Alternating Dumbbell Curls</h2>
          <iframe src="https://www.youtube.com/embed/eZAvPxEB5Dw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Seated Alternating Dumbbell Curls are an isolation exercise that targets the biceps individually, helping improve muscle balance and strength.</p>
          <ol>
            <li>Sit on a bench with your feet flat on the ground and a dumbbell in each hand, palms facing forward.</li>
            <li>Keep your back straight and curl one dumbbell toward your shoulder, contracting your bicep.</li>
            <li>Slowly lower the dumbbell to the starting position, then repeat with the other arm.</li>
            <li>Continue alternating arms for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 10-12 reps per arm, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="incline_curls">
        <div class="exercise-video">
          <h2>5. Incline Dumbbell Curls</h2>
          <iframe src="https://www.youtube.com/embed/FM7725AeXPA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Incline Dumbbell Curls are an effective bicep exercise that places the muscle under constant tension, helping improve muscle growth and strength.</p>
          <ol>
            <li>Set an adjustable bench to a 45-degree angle and sit on it with a dumbbell in each hand, palms facing forward.</li>
            <li>Lean back against the bench and let your arms hang down at your sides.</li>
            <li>Keep your elbows close to your torso and curl both dumbbells toward your shoulders, contracting your biceps.</li>
            <li>Slowly lower the dumbbells back to the starting position and repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 10-12 reps, with a 60-second rest between sets.</p>
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