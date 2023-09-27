<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../workouts.css">
    <title>Hamstrings Workout</title>
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
      <a href="#roman_deadlift">Romanian Deadlift</a><br>
      <a href="#Glute_bridge">Glute Bridge</a><br>
      <a href="#lying_curl">Lying Leg Curl</a><br>
      <a href="#nordic_curl">Nordic Hammstring Curl</a><br>
      <a href="#swiss_curl">Swiss Ball Curl</a><br>
      <a href="#top">Top of Page</a>
      <div id="timer">Rest Timer: <span id="seconds">60</span> seconds</div>
      <button id="startTimer">Start Timer</button>
    </div>

    <div class="exercise-details" id="roman_deadlift">
      <h1>Hamstrings Exercises</h1>
      <div class="exercise-container">
        <div class="exercise-video">
          <h2>1. Romanian Deadlift</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/V8Hdl1FiNt4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Romanian deadlift is a compound exercise that targets the hamstrings, as well as the glutes and lower back.</p>
          <ol>
            <li>Stand with your feet hip-width apart, holding a barbell or dumbbells in front of your thighs with an overhand grip.</li>
            <li>Keep your core tight and your back straight as you hinge forward at the hips, pushing your butt back and lowering the weight towards the ground.</li>
            <li>Lower the weight as far as you can while keeping your back straight and your knees slightly bent.</li>
            <li>Pause briefly at the bottom, then lift the weight back up by driving your hips forward and squeezing your glutes.</li>
            <li>Repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 8-12</p>
        </div>
      </div>
      <div class="exercise-container" id="Glute_bridge">
        <div class="exercise-video">
          <h2>2. Glute Bridge</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/cN4ExWjTP2Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The glute bridge is a simple yet effective exercise that targets the glutes and hamstrings.</p>
          <ol>
            <li>Lie on your back with your knees bent and feet flat on the ground.</li>
            <li>Place your hands at your sides with your palms facing down.</li>
            <li>Push your hips up towards the ceiling, squeezing your glutes and hamstrings at the top of the movement.</li>
            <li>Lower your hips back down to the starting position, then repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 12-15</p>
        </div>
      </div>
      <div class="exercise-container" id="lying_curl">
        <div class="exercise-video">
          <h2>3. Lying Leg Curl</h2>
          <iframe src="https://www.youtube.com/embed/ELOCsoDSmrg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Lying Leg Curl isolates the hamstrings, making it an effective exercise for targeting this muscle group.</p>
          <ol>
            <li>Position yourself on a leg curl machine with your ankles under the padded roller and your body lying face down.</li>
            <li>Grasp the handles for support and keep your torso flat on the bench.</li>
            <li>Curl your legs up towards your glutes, squeezing your hamstrings at the top of the movement.</li>
            <li>Slowly lower the weight back to the starting position, maintaining control throughout the movement.</li>
          </ol>
          <p>Reps: 3 sets of 10-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="nordic_curl">
        <div class="exercise-video">
          <h2>4. Nordic Hamstring Curl</h2>
          <iframe src="https://www.youtube.com/embed/C8a3wQRb390" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Nordic Hamstring Curl is an advanced bodyweight exercise that targets the hamstrings and helps to improve hamstring strength and flexibility.</p>
          <ol>
            <li>Kneel on a soft surface with your feet secured under a sturdy object or held down by a partner.</li>
            <li>Keep your core tight and your body in a straight line from your knees to your head.</li>
            <li>Slowly lower your upper body towards the ground, using your hamstrings to control the descent.</li>
            <li>Once you reach your lowest point, push yourself back up to the starting position using your arms and hamstrings.</li>
          </ol>
          <p>Reps: 3 sets of 4-6 reps, with a 90-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="swiss_curl">
        <div class="exercise-video">
          <h2>5. Swiss Ball Hamstring Curl</h2>
          <iframe src="https://www.youtube.com/embed/XkESHgkTdFw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Swiss Ball Hamstring Curl is a challenging and effective exercise for targeting the hamstrings and improving stability.</p>
          <ol>
            <li>Lie on your back with your feet on top of a Swiss ball, legs extended and hands at your sides.</li>
            <li>Lift your hips off the ground, keeping your core engaged and your body in a straight line from your shoulders to your heels.</li>
            <li>Bend your knees and use your hamstrings to pull the Swiss ball towards your glutes, while maintaining the elevated hip position.</li>
            <li>Slowly extend your legs and roll the Swiss ball back to the starting position, keeping your hips elevated throughout the movement.</li>
          </ol>
          <p>Reps: 3 sets of 10-12 reps, with a 60-second rest between sets.</p>
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