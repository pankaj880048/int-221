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
    session_unset();
    session_destroy();
    if (isset($_POST["submit"])) {
        echo "Session unset and destroyed.<br>";
    }
    ?>
</body>

</html>