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
    seja bem vindo 
    <?php if (!isset($_SESSION)) {
        echo "<Script> window.location.href='../HTML/login.html' </script>";
    }
    if ($_SESSION['cat']=="emp") {
        echo "<img src=".$_SESSION['logo']." >";
    }
    if (isset($_SESSION) && !empty($_SESSION) ) {
       echo "<script>
        var ver = d
        ver.value = 'logado';
       </script>";
    }
    echo $_SESSION['usuario']; ?>
</body>
</html>