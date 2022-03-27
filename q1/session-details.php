<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Document</title>
</head>

<body>
    <?php
    $user = $_SESSION["username"];
    echo "The username is $user <br>";
    ?>
</body>

</html>