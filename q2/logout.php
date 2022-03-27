<?php
session_start();
?>
<?php
$cookie_name = "user";
$cookie_value = $_COOKIE[$cookie_name];
setcookie($cookie_name, $cookie_value, time() - (60 * 60), "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    session_unset();
    session_destroy();
    if (isset($_POST["submit"])) {
        echo "Session unset and destroyed.<br>";
        echo "All cookies deleted. ";
    }
    ?>
</body>

</html>