<?php
    $title = "Accessibility Quiz";
    echo("<title>$title | CRAP Principles</title>");

    require_once("assets/inc/header.inc.php");
?>
    <main>
        <?php
        require_once("assets/inc/accessibilityQuiz.inc.php");
        ?>
    </main>
<?php
    require_once("assets/inc/footer.inc.php");
?>
