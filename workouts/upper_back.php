<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../workouts.css">
    <title>Upper Back Workout</title>
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
      <a href="#bent_over">Dumbell Bent Over</a><br>
      <a href="#rear_fly">Bent Over Rear Fly</a><br>
      <a href="#inverted_row">Inverted Rows</a><br>
      <a href="#pull_ups">Pull Ups</a><br>
      <a href="#barbell_deadlift">Barbell Deadlift</a><br>
      <a href="#top">Top of Page</a>
      <div id="timer">Rest Timer: <span id="seconds">60</span> seconds</div>
      <button id="startTimer">Start Timer</button>
    </div>

    <div class="exercise-details" id="bent_over">
      <h1>Upper Back Workout</h1>
      <div class="exercise-container">
        <div class="exercise-video">
          <h2>1. Dumbbell Bent Over Row</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/DJfQN6xJL28" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Dumbbell Bent Over Row is a compound exercise that targets the upper back, specifically the latissimus dorsi, rhomboids, and trapezius muscles.</p>
          <ol>
            <li>Stand with your feet shoulder-width apart, holding a dumbbell in each hand with your palms facing your body.</li>
            <li>Keeping your back straight, hinge forward at the hips until your upper body is almost parallel to the ground.</li>
            <li>Bend your elbows and pull the dumbbells up towards your body, squeezing your shoulder blades together.</li>
            <li>Lower the dumbbells back down to the starting position, then repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 10-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="rear_fly">
        <div class="exercise-video">
          <h2>2. Bent Over Dumbbell Rear Fly</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/kLW7nbw4lcY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Bent Over Dumbbell Rear Fly is an isolation exercise that targets the rear deltoids and upper back muscles.</p>
          <ol>
            <li>Stand with your feet shoulder-width apart, holding a dumbbell in each hand with your palms facing inwards.</li>
            <li>Keeping your back straight, hinge forward at the hips until your upper body is almost parallel to the ground.</li>
            <li>Keeping your elbows slightly bent, raise the dumbbells out to the sides until your arms are parallel to the ground.</li>
            <li>Lower the dumbbells back down to the starting position, then repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 10-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="inverted_row">
        <div class="exercise-video">
          <h2>3. Inverted Rows</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/9fItzuh9Iok" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Inverted Rows are a bodyweight exercise that target the upper back and biceps.</p>
          <ol>
            <li>Set up a barbell or suspension trainer at waist height.</li>
            <li>Lie underneath the bar or straps and grip it with an overhand grip, hands shoulder-width apart.</li>
            <li>Keeping your body straight and core engaged, pull your chest towards the bar or straps by retracting your shoulder blades and bending your elbows.</li>
            <li>Hold for a second, then slowly lower yourself back down to the starting position.</li>
            <li>Repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 8-10 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="pull_ups">
        <div class="exercise-video">
          <h2>4. Pull-Ups</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/eGo4IYlbE5g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Pull-Ups are a bodyweight exercise that targets the upper back, specifically the latissimus dorsi muscles.</p>
          <ol>
            <li>Hang from a pull-up bar with your hands shoulder-width apart, palms facing away from you.</li>
            <li>Engage your core and pull yourself up until your chin is above the bar.</li>
            <li>Lower yourself back down to the starting position.</li>
            <li>Repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 8-10 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="barbell_deadlift">
        <div class="exercise-video">
          <h2>5. Barbell Deadlift</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/op9kVnSso6Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Barbell Deadlift is a compound exercise that targets the entire back, including the upper back, as well as the legs and core.</p>
          <ol>
            <li>Stand with your feet shoulder-width apart and the barbell on the ground in front of you.</li>
            <li>Bend your knees and hips to lower your body down and grasp the bar with an overhand grip, hands shoulder-width apart.</li>
            <li>Keeping your back straight and core engaged, stand up straight while lifting the bar off the ground.</li>
            <li>Lower the bar back down to the ground by bending your knees and hips, keeping your back straight and core engaged.</li>
            <li>Repeat for the desired number of repetitions.</li>
          </ol>
          <p>Reps: 3 sets of 8-10 reps, with a 60-90 second rest between sets.</p>
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