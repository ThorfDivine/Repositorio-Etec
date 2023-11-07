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
        <!-- Fav-Icon -->
            <link rel="shortcut icon" href="../../contents/favIcon/favicon.ico" type="image/x-icon">
        <!-- end -->

        <!-- Fav-Icon -->
            <link rel="shortcut icon" href="../contents/favIcon/favicon.ico" type="image/x-icon">
        <!-- end -->

        <!-- Material Icons -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- End -->
    <!-- ==================================================================================== -->
        <!-- CSS -->
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/home.css">
            <link rel="stylesheet" href="../../style/header.css">
            <link rel="stylesheet" href="../../style/certificados.css">
        <!-- End -->
    <title>BartoHelp - Meus Certificados</title>
</head>
<body>
    
    <header></header>

        <section class="bigMarginTop bigMarginBotom centralize">

            <div class="respostaElse">
                <!-- Essa div só deve ser criada (junto ao seu conteúdo) caso NÃO haja certificados 
                    cadastrados previamente pelo usuário, estes cujo, registrados no banco de dados -->
                <h1>Ao que parece você não possui certificados cadastrados</h1>
                <h3>Clique <a href="./certificados.php">aqui</a> para iniciar sua jornada!</h3>
            </div>

            <div class="myCrts flexR wrap_True spaceAround">
                <!-- Essa div só deve ser criada (junto ao seu conteúdo) caso HAJA certificados 
                    cadastrados previamente pelo usuário, estes cujo, registrados no banco de dados -->
                    <div class="cardCertificado">
                        <div class="img_conteiner">
                            <img src="../../contents/imgs/paralax/paralaxUsuario2.png" alt="certificado[pk_id]">
                        </div>
                        <div class="cerificadoInfo flexC spaceEvenly alingCenter">
                            <h3>Tipo (curso/faculdade/...)</h3>
                            <p>data de conclusão</p>
                        </div>
                    </div>
                    <!-- são possiveis adicionar até 8 cards de certificados nesta janela (sem que haja transbordamento)
                        [contador deverá parar em 8] -->
            </div>
        </section>

    <footer></footer>
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script>
        // ajax - Acincronismo


    </script>
</html>