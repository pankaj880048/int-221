<?php
session_start();
?>
<?php
$cookie_name = "user";
$cookie_value = $_POST["fullname"];
setcookie($cookie_name, $cookie_value, time() + (60 * 60), "/");
?>
<?php
$error = false;
if (isset($_POST["submit"])) {
    $full_name = $_POST["fullname"];
    if (!preg_match("/^[a-zA-z\s]+$/", $full_name)) {
        $Err = "Only alphabets and space are allowed.";
        $error = true;
        echo "<br><br>";
        echo $Err;
    } else {
        echo "<br>";
        echo "Your name is $full_name";
    }

    $mobile = $_POST["phone"];
    if (!preg_match("/^[0-9]+$/", $mobile)) {
        $error = true;
        $Err = "<br>Only numeric value is allowed. <br>";
        echo $Err;
    } else {
        echo  "<br>Your phone number is $mobile <br>";
    }



    if (!$error) {
        echo "Logged in Successfully. <br>";
        $full_name = $_POST["fullname"];
        $email =  $_POST["email"];
        $mobile = $_POST["phone"];

        $_SESSION["username"]  = $full_name;
        echo "Cokkies and session are set. <br> ";
    } else {
        echo "<br> <br>Unable to set cokkies and session. Illegal Information.";
    }
}
?>

<?php

if (!$error) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        
        <title>Document</title>
    </head>

    <body>
        <form action="logout.php" method="post">
            <input type="submit" value="Log Out" name="submit">
        </form>
    </body>

    </html>
<?php
}
?>