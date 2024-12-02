<?php
    require_once("../assets/inc/connection.inc.php");

    $sql = "SELECT `Email`, `Name`, `Phone`, `DateTime` FROM `Contact`";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/scripts/tools.js"></script>
</head>
<body>
    <main>
        <div class="requests">
            <?php
                if($result = $mysqli->query($sql)) {
                    while($row = $result->fetch_assoc()) {
                        include("../assets/inc/request.inc.php");
                    }
                    $result->free_result();
                }
            ?>
        </div>
    </main>
</body>