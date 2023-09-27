<?php
// connect to the database
require 'connect.php';

// create session
session_start();

?>

<!DOCTYPE html>
<html>
  
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="about.css">
</head>

<body>
    <nav>
        <ul>
            <div class="left_about">
                <li>
                    <img src="images/go_back.png">
                    <a href="./home.php">Go back to home</a></li>
            </div>
        </ul>
    </nav>


<div class="about-section">
  <h1>BeFit Team</h1>
  <p>Meet the developers of this project!</p>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <!--<img src="" alt="Antonio" style="width:100%">-->
      <div class="container">
        <h2>Antonio Milin</h2>
        <p class="title">Front end</p>
        <p>Computer Science student</p>
        <p>Swimmer at CSUB</p>
        <p>amilin@csub.edu</p>
        <p><button class="button">661-541-8580</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <!--<img src="" alt="Ryan" style="width:100%">-->
      <div class="container">
        <h2>Ryan Gordon </h2>
        <p class="title">Front end</p>
        <p>CSUB Computer Science student.</p>
        <p>rgordon6@csub.edu</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <!--<img src="" alt="Darien" style="width:100%">-->
      <div class="container">
        <br>
        <h2>Darien Ware</h2>
        <p class="title">Back End</p>
        <br>
        <p>CSUB Computer Science student. </p>
        <p>dware3@csub.edu</p>
        <a href="https://www.linkedin.com/in/darien-ware-02ab6a189">My LinkedIn</a>
        <br>
        <br>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <!--<img src="" alt="Matthew" style="width:100%">-->
      <div class="container">
        <br>
        <h2>Matthew Deguia</h2>
        <p class="title">Back End</p>
        <br>
        <p>CSUB Computer Science Student</p>
        <p>Let's Chat:
        <a href="https://www.linkedin.com/in/matthew-deguia-983593274/">My LinkedIn</a>
        </p>
        <br>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <!--<img src="" alt="Patrick" style="width:100%">-->
      <div class="container">
        <h2>Patrick Cruz</h2>
        <p class="title">Back end</p>
        <p>CSUB Computer Science Student</p>
        <p>cruzpatrick1996@gmail.com
          <a href="www.linkedin.com/in/patrick-cruz-bb0413274/">My LinkeIn</a>
        </p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
