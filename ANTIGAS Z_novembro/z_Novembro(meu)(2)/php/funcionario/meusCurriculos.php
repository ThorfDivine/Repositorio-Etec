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
    <title>BartoHelp - Meus Currículos</title>
    <!-- Fav-Icon -->
        <link rel="shortcut icon" href="../contents/favIcon/favicon.ico" type="image/x-icon">
    <!-- end -->
    
    <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- End -->
        <!-- ==================================================================================== -->
    <!-- CSS -->
        <link rel="stylesheet" href="../../style/style.css">
        <link rel="stylesheet" href="../../style/header.css">
        <link rel="stylesheet" href="../../style/meusCurriculos.css">
    <!-- End -->
</head>
<body>
    <header></header>
    
    <section class="bigMarginTop bigMarginBotom centralize">
        <div class="respostaElse">
            <!-- Essa div só deve ser criada (junto ao seu conteúdo) caso não haja currículos 
                 cadastrados previamente pelo usuário, estes cujo, registrados no banco de dados -->
            <h1>Ao que parece você não possui currículos cadastrados</h1>
            <h3>Clique <a href="./curriculos.php">aqui</a> para iniciar sua jornada!</h3>
        </div>
        
        <div class="vagas">

        </div>
</section>

    <footer></footer>
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
</html>