<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../workouts.css">
    <title>Lower Back Workout</title>
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
      <a href="#side_plank">Side Plank</a><br>
      <a href="#bird_dog">Bird Dog</a><br>
      <a href="#superman">Superman</a><br>
      <a href="#good_morning">Good Morning</a><br>
      <a href="#lower_back">Lower Back Extension</a><br>
      <a href="#top">Top of Page</a>
      <div id="timer">Rest Timer: <span id="seconds">60</span> seconds</div>
      <button id="startTimer">Start Timer</button>
    </div>

    <div class="exercise-details">
      <h1>Lower Back Exercises</h1>
      <div class="exercise-container" id="side_plank">
        <div class="exercise-video">
          <h2>1. Side Plank</h2>
          <iframe src="https://www.youtube.com/embed/ZpBJIRLGEgg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Side Plank is a great exercise for targeting your obliques and lower back.</p>
          <ol>
            <li>Lie on your side with your elbow directly beneath your shoulder and your legs stacked on top of each other.</li>
            <li>Lift your hips off the ground, creating a straight line from your head to your feet.</li>
            <li>Hold the position for 30 seconds to 1 minute, then switch sides and repeat.</li>
          </ol>
          <p>Reps: 3 sets of 30-60 seconds on each side, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="bird_dog">
        <div class="exercise-video">
          <h2>2. Bird Dog Exercise</h2>
          <iframe src="https://www.youtube.com/embed/ZdAHe9_HeEw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Bird Dog exercise is a great way to strengthen your lower back and improve your balance and coordination.</p>
          <ol>
            <li>Start on your hands and knees with your hands directly under your shoulders and your knees under your hips.</li>
            <li>Extend your right arm forward and your left leg back, keeping them parallel to the ground.</li>
            <li>Hold the position for a few seconds, then return to the starting position.</li>
            <li>Repeat the movement on the opposite side, extending your left arm and right leg.</li>
            <li>Continue alternating sides for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 10-15 reps per side, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="superman">
        <div class="exercise-video">
          <h2>3. Superman Exercise</h2>
          <iframe src="https://www.youtube.com/embed/ULJtPkwF3vU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Superman Exercise is an excellent way to strengthen your lower back and gluteal muscles.</p>
          <ol>
            <li>Lie face down on the floor with your arms extended overhead and your legs straight.</li>
            <li>Lift your arms, chest, and legs off the ground simultaneously, squeezing your glutes and lower back muscles.</li>
            <li>Hold the position for a few seconds, then slowly lower your body back to the starting position.</li>
            <li>Repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 10-15 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="good_morning">
        <div class="exercise-video">
          <h2>4. Good Morning</h2>
          <iframe src="https://www.youtube.com/embed/kSf-Kz0BYCM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Good Morning is an effective exercise for strengthening your lower back and hamstrings.</p>
          <ol>
            <li>Stand with your feet shoulder-width apart, and place a barbell across your upper back and shoulders.</li>
            <li>With a slight bend in your knees, hinge forward at the hips, keeping your back straight.</li>
            <li>Lower your torso until it is almost parallel to the floor, then return to the starting position by driving your hips forward and engaging your lower back and hamstrings.</li>
            <li>Repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 8-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="lower_back">
        <div class="exercise-video">
          <h2>5. Lower Back Extension</h2>
          <iframe src="https://www.youtube.com/embed/ph3pddpKzzw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Lower Back Extensions are an excellent way to isolate and strengthen the lower back muscles.</p>
          <ol>
            <li>Position yourself on a back extension bench or Roman chair with your thighs resting on the pads and your feet secured under the footrests.</li>
            <li>Start with your upper body parallel to the ground, hands crossed over your chest or behind your head.</li>
            <li>Slowly raise your torso by contracting your lower back muscles until your body is in a straight line.</li>
            <li>Hold the top position for a moment, then slowly lower your torso back to the starting position.</li>
            <li>Repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 10-15 reps, with a 60-second rest between sets.</p>
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