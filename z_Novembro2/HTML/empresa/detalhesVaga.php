<?php
session_start();
if (!isset($_SESSION) || $_SESSION =="" || $_SESSION == null) {
    header('Location: ../login.html');
}else{
include('../../php/conexao.php');

$idVaga = $_GET['idVaga'];

$buscaVaga = mysqli_query($con, "SELECT * FROM vaga where id_vaga = '$idVaga'");
$resultadoVaga = mysqli_fetch_row($buscaVaga);

$cnpj = $resultadoVaga[9];

$buscaEmp = mysqli_query($con, "SELECT * FROM empresa where cnpj = '$cnpj'");
$resultadoEmp = mysqli_fetch_row($buscaEmp);

$buscaLogo = $resultadoEmp[5];
$dataLimite = $resultadoVaga[7];

$dataLimite = implode("/",array_reverse(explode("-",$dataLimite)));
if ($buscaLogo=="" || $buscaLogo==null || $buscaLogo == " ") {
    $buscaLogo = "../../contents/imgs/3106921.png";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Material Icons -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- End -->
    <!-- ==================================================================================== -->
        <!-- CSS -->
            <link rel="stylesheet" href="../../style/home.css">
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/header.css">
            <link rel="stylesheet" href="../../style/home_empresa.css">
            <link rel="stylesheet" href="../../style/detalhesVaga.css">
        <!-- End -->
    <title>BartoHelp - Empresa</title>
</head>
<body>
    
    <header id="topo">
    </header>

    <div class="topo">
        <div class="img">
            <img src="<?php echo $buscaLogo; ?>" alt="" class="logoEmp">
        </div>
        

        <div class="titulo">
            <h1> <?php echo $resultadoVaga[1]; ?></h1>
            <hr/>
            <h4> <?php echo $resultadoEmp[1]?></h4>
            <h4> <?php echo $resultadoVaga[10]?> </h4>
            <h4> <?php echo $resultadoVaga[3]?> </h4>
            <h4> <?php echo $resultadoVaga[6]." - ".$dataLimite;?> </h4>
        </div>
        
    </div>
    <div class="contedor">
        <div>
            <h1>
                Sobre a empresa
            </h1>
        </div>

        <div>
            <h1>
                Requisitos
            </h1>
        </div>

        <div>
            <h1>
                Cargo
            </h1>
        </div>

        <div>
            <h1>
                Benefícios
            </h1>
        </div>
    </div>
   
    <footer>
    </footer>
    
</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/confirmDelet.js"></script>
</html> <?php } ?>