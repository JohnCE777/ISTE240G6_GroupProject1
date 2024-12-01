<?php
    require_once("Assets/inc/connection.inc.php");
    require_once("Assets/inc/validations.inc.php");
    require_once("Assets/inc/tools.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 6 ISTE-240 Project 1</title>

    <link rel="stylesheet" href="Assets/css/style.css">
    <script src="Assets/scripts/tools.js"></script>
    <script src="Assets/scripts/navbar.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul id="navbar-list">
                <li id="home"><a href="./index.php">Home</a></li>
                <li id="principles">
                    <span>Principles</span>
                    <div class="dropdown">
                        <a href="./contrast.php">Contrast</a>
                        <a href="./repetition.php">Repetition</a>
                        <a href="./alignment.php">Alignment</a>
                        <a href="./proximity">Proximity</a>
                    </div>
                </li>
                <li id="about"><a href="./about.php">About</a></li>
            </ul>
            <img
                src="./Assets/media/hamburger.svg"
                onclick="openNav();"
                id="hamburger"
            />
            <img src="./Assets/media/x.svg" onclick="closeNav();" id="x" />
        </nav>
    </header>
</body>
</html>