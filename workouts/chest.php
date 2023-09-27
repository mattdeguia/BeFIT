<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../workouts.css">
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
      <a href="#push_up">Push ups</a><br>
      <a href="#bench_press">Dumbbell Bench Press</a><br>
      <a href="#incline_press">Incline Dumbbell Press</a><br>
      <a href="#chest_fly">Chest Fly</a><br>
      <a href="#decline_pushup">Decline Push-ups</a><br>
      <a href="#top">Top of Page</a>
      <div id="timer">Rest Timer: <span id="seconds">60</span> seconds</div>
      <button id="startTimer">Start Timer</button>
    </div>

    <div class="exercise-details">
      <h1>Chest Exercises</h1>
      <div class="exercise-container" id="push_up">
        <div class="exercise-video">
          <h2>1. Push-ups</h2>
          <iframe src="https://www.youtube.com/embed/WDIpL0pjun0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Push-ups are a great exercise for building upper body strength, targeting your chest, triceps, and shoulders. They can be done anywhere and require no equipment.</p>
          <ol>
            <li>Place your hands slightly wider than shoulder-width apart on the floor.</li>
            <li>Extend your legs straight out behind you, resting on the balls of your feet.</li>
            <li>Keep your body straight and rigid from head to toe.</li>
            <li>Lower your body toward the ground, bending your elbows.</li>
            <li>Push your body back up to the starting position by straightening your arms.</li>
          </ol>
          <p>Reps: 3 sets of 10-15</p>
        </div>
      </div>
      <div class="exercise-container" id="bench_press">
        <div class="exercise-video">
          <h2>2. Dumbbell Bench Press</h2>
          <iframe src="https://www.youtube.com/embed/4_QuyfOCI5U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Dumbbell Bench Press is a popular exercise that targets your chest muscles and also helps to strengthen your shoulders and triceps. It's a great alternative to the barbell bench press if you don't have access to a barbell or a spotter.</p>
          <ol>
            <li>Lie on a flat bench with a dumbbell in each hand.</li>
            <li>Start with the dumbbells at chest level, with your palms facing forward.</li>
            <li>Push the dumbbells up and away from your chest until your arms are fully extended.</li>
            <li>Lower the dumbbells back down to your chest in a controlled manner.</li>
          </ol>
          <p>Reps: 3 sets of 8-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="incline_press">
        <div class="exercise-video">
          <h2>3. Incline Dumbbell Press</h2>
          <iframe src="https://www.youtube.com/embed/8iPEnn-ltC8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Incline Dumbbell Press targets the upper chest muscles, as well as the shoulders and triceps. This exercise helps build the upper chest, giving it a fuller appearance.</p>
          <ol>
            <li>Set an adjustable bench to a 30-45 degree incline.</li>
            <li>Sit on the bench with a dumbbell in each hand, palms facing forward.</li>
            <li>Start with the dumbbells at chest level, elbows bent at 90 degrees.</li>
            <li>Press the dumbbells up and together, fully extending your arms.</li>
            <li>Lower the dumbbells back to the starting position in a controlled manner.</li>
          </ol>
          <p>Reps: 3 sets of 8-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="chest_fly">
        <div class="exercise-video">
          <h2>4. Chest Fly</h2>
          <iframe src="https://www.youtube.com/embed/UKwkChzThig" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>The Chest Fly is an isolation exercise that targets the chest muscles, specifically the pectoralis major. This exercise helps to develop the chest's inner and outer portions, creating a more balanced appearance.</p>
          <ol>
            <li>Lie on a flat bench with a dumbbell in each hand, arms extended above your chest and palms facing each other.</li>
            <li>With a slight bend in your elbows, lower the dumbbells out to the sides in a wide arc until you feel a stretch in your chest.</li>
            <li>Bring the dumbbells back to the starting position, squeezing your chest muscles at the top of the movement.</li>
          </ol>
          <p>Reps: 3 sets of 10-12 reps, with a 60-second rest between sets.</p>
        </div>
      </div>
      <div class="exercise-container" id="decline_pushup">
        <div class="exercise-video">
          <h2>5. Decline Push-ups</h2>
          <iframe src="https://www.youtube.com/embed/SKPab2YC8BE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="exercise-description">
          <p>Decline Push-ups target the lower chest muscles and put more emphasis on the shoulders and triceps. They are a challenging variation of the classic push-up that require more strength and balance.</p>
          <ol>
            <li>Place your feet on an elevated surface, such as a bench or step.</li>
            <li>Assume a push-up position with your hands slightly wider than shoulder-width apart.</li>
            <li>Lower your body toward the ground, bending your elbows, while maintaining a straight line from your head to your heels.</li>
            <li>Push your body back up to the starting position by straightening your arms.</li>
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