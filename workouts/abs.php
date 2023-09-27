<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../workouts.css">
    <title>Abs Workout</title>
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
      <a href="#planks">Planks</a><br>
      <a href="#russian_twists">Russian Twists</a><br>
      <a href="#leg_raises">Leg Raises</a><br>
      <a href="#bicycle_crunches">Bicycle Crunches</a><br>
      <a href="#mountian_climbers">Mountain Climbers</a><br>
      <a href="#top">Top of Page</a>
      <div id="timer">Rest Timer: <span id="seconds">60</span> seconds</div>
      <button id="startTimer">Start Timer</button>
    </div>

    <div class="exercise-details">
      <h1>Abs Exercises</h1>
      <div class="exercise-container" id="planks">
        <div class="exercise-video">
          <h2>1. Planks</h2>
          <iframe src="https://www.youtube.com/embed/xhk1JkbF2lg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Planks are a core-strengthening exercise that engage the entire abdominal region, lower back, and glutes. They help improve posture, balance, and overall core stability.</p>
          <ol>
            <li>Begin in a push-up position, but rest your forearms on the ground instead of your hands.</li>
            <li>Keep your body straight and maintain a neutral spine.</li>
            <li>Hold the position for the desired duration, remembering to breathe normally.</li>
          </ol>
          <p>Duration: 3 sets of 30-60 second holds, with a 60-second rest between sets.</p>
          
        </div>
      </div>
      <div class="exercise-container" id="russian_twists">
        <div class="exercise-video">
          <h2>2. Russian Twists</h2>
          <iframe src="https://www.youtube.com/embed/s0kT80JLCfA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Russian Twists are a challenging abdominal exercise that targets the obliques, rectus abdominis, and hip flexors. They also improve spinal mobility and rotational power.</p>
          <ol>
            <li>Start by sitting on the floor with your knees bent and your feet flat on the ground.</li>
            <li>Lean back slightly and lift your feet off the ground, balancing on your sit bones.</li>
            <li>Interlace your fingers and hold your hands straight out in front of your chest.</li>
            <li>Rotate your torso to the right, bringing your hands to the right side of your body.</li>
            <li>Rotate your torso to the left, bringing your hands to the left side of your body.</li>
            <li>Continue alternating sides in a controlled manner.</li>
          </ol>
          <p>Reps: 3 sets of 10-12 reps per side, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="leg_raises">
        <div class="exercise-video">
          <h2>3. Leg Raises</h2>
          <iframe src="https://www.youtube.com/embed/JB2oyawG9KI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Leg raises are a great exercise to target the lower abs and hip flexors.</p>
          <ol>
            <li>Lie on your back on the floor, with your hands by your sides or under your lower back for support.</li>
            <li>Keep your legs straight and raise them up toward the ceiling until they're perpendicular to the floor.</li>
            <li>Slowly lower your legs back down, stopping just before your lower back lifts off the ground. Repeat.</li>
          </ol>
          <p>Reps: 3 sets of 10-15 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="bicycle_crunches">
        <div class="exercise-video">
          <h2>4. Bicycle Crunches</h2>
          <iframe src="https://www.youtube.com/embed/9FGilxCbdz8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Bicycle crunches are an excellent exercise for targeting the upper and lower abs, as well as the obliques.</p>
          <ol>
            <li>Lie on your back with your hands behind your head, elbows wide, and legs bent at a 90-degree angle.</li>
            <li>Lift your head, neck, and shoulders off the floor, and bring your right knee toward your chest while rotating your left elbow toward your right knee.</li>
            <li>Switch sides by extending your right leg and bringing your left knee toward your chest while rotating your right elbow toward your left knee. Repeat.</li>
          </ol>
          <p>Reps: 3 sets of 12-15 reps per side, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="mountian_climbers">
        <div class="exercise-video">
          <h2>5. Mountain Climbers</h2>
          <iframe src="https://www.youtube.com/embed/nmwgirgXLYM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Mountain climbers are a dynamic exercise that targets the abs, obliques, and hip flexors, while also engaging the upper body and increasing cardiovascular endurance.</p>
          <ol>
            <li>Start in a plank position with your hands shoulder-width apart and your feet hip-width apart.</li>
            <li>Bring your right knee toward your chest, keeping your foot off the ground.</li>
            <li>Quickly switch legs, bringing your left knee toward your chest as you extend your right leg back.</li>
            <li>Continue alternating legs at a brisk pace, maintaining proper plank form and engaging your core throughout the movement.</li>
          </ol>
          <p>Reps: 3 sets of 30-45 seconds, with a 60-second rest between sets.</p>
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