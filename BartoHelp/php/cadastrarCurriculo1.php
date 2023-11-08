<?php 
session_start();
include("./conexao.php");
$tipo = $_POST['escolaridade'];
$instituicao = $_POST['instituicao'];
$inicio = $_POST['inicio'];
$conclusao = $_POST['conclusao'];
$cpf = $_SESSION['cpf'];

if ($conclusao == "Em curso") {
    $concluido = 0;
}else{
    $concluido = 1;
}

$inserir = mysqli_query($con, "insert into escolaridade(tipo, instituicao, data_inicio, data_final, cpf_cliente, concluido) values ('$tipo', '$instituicao', '$inicio', '$conclusao', '$cpf', '$concluido' )");
if ($inserir) {
    echo "<script>window.location.href=\"./funcionario/endCurriculos.php\"</script>";
}
else{
    echo "<script>alert(\"erro ao inserir\");window.location.href=\"./funcionario/curriculos.php\"</script>";
}
?>