<?php
    require_once("assets/inc/connection.inc.php");
    require_once("assets/inc/validations.inc.php");
    require_once("assets/inc/tools.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . ' | CRAP Principles' ?></title>

    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/scripts/tools.js"></script>
    <script src="assets/scripts/navbar.js"></script>
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
                        <a href="./accessibility.php">Accessibility</a>
                        <a href="./proximity.php">Proximity</a>
                    </div>
                </li>
                <li id="about"><a href="./about.php">About</a></li>
            </ul>
            <img
                src="./assets/media/hamburger.svg"
                onclick="openNav();"
                id="hamburger"
            />
            <img src="./assets/media/x.svg" onclick="closeNav();" id="x" />
        </nav>
    </header>
</body>
</html>