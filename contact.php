<?php
    $error = "";
    $posted = false;
    $title = "contact";
    require_once("assets/inc/header.inc.php");

    $title = "Contact";
    echo("<title>$title | CRAP Principles</title>");

    function post() 
    {
        global $mysqli, $error;

        if($mysqli -> connect_errno) {
            $error = "connection error";
            return false;
        }

        $stmt = $mysqli->prepare("INSERT INTO Contact (`Name`, `Email`, `Phone`) VALUES (?, ?, ?)");

        $stmt->bind_param("sss", $name, $email, $phone);

        $name = sanitize($_POST['name']);
        $email = sanitize($_POST['email']);
        $phone = sanitize($_POST['phone']);

        if(!emailCheck($email))
        {
            $error .= "Email, ";
        }
        if(!$name)
        {
            $error .= "Name, ";
        }
        if(!$phone)
        {
            $error .= "Phone, ";
        }
        if($error)
        {
            $error = "Invalid " . $error; 
            rtrim($error, ",");
            return false;
        }

        $stmt->execute();
        return true;
    }

    if($_POST)
    {
       $posted = post();
    }

    
?>
    <main>
        <?php
            if($error)
            {
                echo '<div class="alert"><h3>' . $error . '</h3></div>';
            }
            else if($posted)
            {
                echo '<div class="success"><h3>Thanks For Submitting Contact Info</h3></div>';
            }
            require_once("assets/inc/contactForm.inc.php");
        ?>
    </main>
<?php
    require_once("assets/inc/footer.inc.php");
?>
