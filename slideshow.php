<?php
require 'connect.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BeFIT Slideshow</title>
  <style>
    .slideshow-container {
      max-width: 800px;
      position: relative;
      margin: 0 auto;
      z-index: 1;
    }

    .slide {
      position: absolute;
      width: 100%;
      height: 300px;
      opacity: 0;
      transition: opacity 1s;
    }

    .slideshow-container img {
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .show {
      opacity: 1 !important;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
  <div class="hero">
    <div class="slideshow-container">
        <div class="slide show">
          <img src="images/workout1.jpg" alt="Workout 1">
        </div>
        <div class="slide">
          <img src="images/workout2.jpg" alt="Workout 2">
        </div>
        <div class="slide">
          <img src="images/workout3.jpg" alt="Workout 3">
        </div>
        <div class="slide">
          <img src="images/workout4.jpg" alt="Workout 4">
        </div>
        <div class="slide">
          <img src="images/meal1.jpg" alt="Healthy Meal 1">
        </div>
        <div class="slide">
          <img src="images/meal2.jpg" alt="Healthy Meal 2">
        </div>
        <div class="slide">
          <img src="images/meal3.jpg" alt="Healthy Meal 3">
        </div>
        <div class="slide">
          <img src="images/meal4.jpg" alt="Healthy Meal 4">
        </div>
    </div>
  </div>
  
  <script>
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function showRandomSlide() {
      slides[currentSlide].classList.remove('show');
      currentSlide = Math.floor(Math.random() * slides.length);
      slides[currentSlide].classList.add('show');
    }

    setInterval(showRandomSlide, 5000); // Change image every 5 seconds
  </script>
</body>
</html>
