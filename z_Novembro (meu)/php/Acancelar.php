<?php 
session_start();
include("./conexao.php");
$idVaga = $_POST['idVaga'];
$cpf = $_SESSION['cpf'];

mysqli_query($con, "delete from interesse where id_usuario = '$cpf' and id_vaga = '$idVaga'");

?>