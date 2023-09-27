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
<link rel="stylesheet" href="workouts.css">

</head>
<body>
    
    
    <nav>
        <ul>
            <div class="left_workouts">
                <li>
                <img src="images/go_back.png">
                    <a href="./home.php">Go back to home</a>
                </li>
            </div>
        </ul>
    </nav>

    <div class="instruction">
        <h1>Choose a body part on the diagram to find workouts for that muscle group.</h1>
    </div>

    <div class="body-diagram">
    <svg class="body-diagram-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 140 580 712" width="100%" height="auto" preserveAspectRatio="xMidYMid meet">
    <image xlink:href="images/body-diagram.png" width="580" height="792"/>
    <!-- Front Body -->
    <a xlink:href="workouts/chest.php">
        <rect x="95" y="240" width="100" height="50" fill-opacity="0" data-tooltip="Chest"/>
    </a>
    <a xlink:href="workouts/biceps.php">
        <rect x="45" y="250" width="50" height="70" fill-opacity="0" data-tooltip="Biceps"/>
    </a>
    <a xlink:href="workouts/biceps.php">
        <rect x="200" y="250" width="50" height="70" fill-opacity="0" data-tooltip="Biceps"/>
    </a>
    <a xlink:href="workouts/abs.php">
        <rect x="120" y="300" width="50" height="75" fill-opacity="0" data-tooltip="Abs"/>
    </a>
    <a xlink:href="workouts/quads.php">
        <rect x="85" y="370" width="120" height="100" fill-opacity="0" data-tooltip="Quads"/>
    </a>
    <!-- Back Body -->
    <a xlink:href="workouts/upper_back.php">
        <rect x="382" y="220" width="100" height="70" fill-opacity="0" data-tooltip="Upper Back"/>
    </a>
    <a xlink:href="workouts/lower_back.php">
        <rect x="382" y="290" width="100" height="70" fill-opacity="0" data-tooltip="Lower Back"/>
    </a>
    <a xlink:href="workouts/glutes.php">
        <rect x="382" y="350" width="100" height="60" fill-opacity="0" data-tooltip="Glutes"/>
    </a>
    <a xlink:href="workouts/forearms.php">
        <rect x="330" y="300" width="50" height="70" fill-opacity="0" data-tooltip="Forearms"/>
    </a>
    <a xlink:href="workouts/forearms.php">
        <rect x="490" y="300" width="50" height="70" fill-opacity="0" data-tooltip="Forearms"/>
    </a>
    <a xlink:href="workouts/hamstrings.php">
        <rect x="380" y="417" width="110" height="70" fill-opacity="0" data-tooltip="Hamstrings"/>
    </a>
    <a xlink:href="workouts/calves.php">
        <rect x="380" y="490" width="110" height="80" fill-opacity="0" data-tooltip="Calves"/>
    </a>
</svg>

    </div>
    
    <script>
        const areas = document.querySelectorAll("rect");
        const tooltip = document.createElement("div");
        tooltip.className = "tooltip";
        document.body.appendChild(tooltip);

        areas.forEach((area) => {
            area.addEventListener("mouseenter", (e) => {
                const tooltipText = area.getAttribute("data-tooltip");
                tooltip.textContent = tooltipText;
                tooltip.style.display = "block";
                tooltip.style.left = e.pageX + 10 + "px";
                tooltip.style.top = e.pageY + 10 + "px";
            });

            area.addEventListener("mousemove", (e) => {
                tooltip.style.left = e.pageX + 10 + "px";
                tooltip.style.top = e.pageY + 10 + "px";
            });

            area.addEventListener("mouseleave", () => {
                tooltip.style.display = "none";
            });
        });
    </script>

</body>
<footer><p style="display: block; text-align: center; padding: 3px; background-color: #bbb7df;
    color: rgba(255, 255, 255, 0.741);">© BeFit 2023</p></footer>
</html>
