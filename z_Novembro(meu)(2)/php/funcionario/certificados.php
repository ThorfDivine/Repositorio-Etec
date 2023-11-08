<?php 
session_start();
if(
    !isset($_SESSION) 
    || $_SESSION =="" 
    || $_SESSION == null 
    || !isset($_SESSION['cpf']) 
    ||  $_SESSION['cpf'] =="" 
    || $_SESSION['cpf'] == null 
    || empty($_SESSION['cpf'])
    
    ){header('Location: ../../html/login.html');}  

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BartoHelp - Certificados</title>
    <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- End -->
        <!-- ==================================================================================== -->
    <!-- CSS -->
        <link rel="stylesheet" href="../../style/style.css">
        <link rel="stylesheet" href="../../style/header.css">
        <style>
            section{
                height: 80vh;
            }
        </style>
    <!-- End -->
</head>
<body>
    <header></header>
    
    <section class="bigMarginTop bigMarginBotom centralize">
        <form action="../upload.php" methot="post">
            <div class="flexC">
                <label style="margin: 5px 25px;" for="certificado" onchange="testarChange()"> Seu Certificado: </label>
                    <input style="display: block;" type="file" name="certificado" id="certificado" class="inputPattern" id="certificado">
            </div>
            <input type="submit" value="enviar" id="enviarCertificado" class="buttonPattern">
        </form>
    </section>

    <footer></footer>
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/certificados.js"></script>
    
</html>
