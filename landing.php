<?php
    include './Assets/inc/header.inc.php';

    if($mysqli -> connect_errno) {
        print_r("oops");
        exit;
    }

    $stmt = $mysqli->prepare("INSERT INTO Contact (`Name`, `Email`, `Phone`) VALUES (?, ?, ?)");

    $stmt->bind_param("sss", $name, $email, $phone);

    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $phone = sanitize($_POST['phone']);

    if(!emailCheck($email) || !$name || !$phone)
    {
        echo '<h3> enter valid email </h3>';
        exit;
    }
    if(!$name)
    {
        echo '<h3> enter valid name </h3>';
        exit;
    }
    if(!$phone)
    {
        echo '<h3> enter valid phone number </h3>';
        exit;
    }

    $stmt->execute();
?>
    <main>
        <p>Thanks for submitting contact info</p>
    </main>
<?php
    require_once("Assets/inc/footer.inc.php");
?>
