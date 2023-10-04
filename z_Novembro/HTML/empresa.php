<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    seja bem vinda <?php if (!isset($_SESSION)) {
        echo "<Script> window.location.href='../HTML/login.html' </script>";
    }echo $_SESSION['usuario']; ?>
</body>
</html>