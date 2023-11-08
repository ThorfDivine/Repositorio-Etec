<?php 
session_start();
include("./conexao.php");
$experiencia = $_POST['experiencia'];
$cpf = $_SESSION['cpf'];

mysqli_query($con,"INSERT into experiencia(cpf_cliente, descricao) values ('$cpf', '$experiencia')");
echo "<script>alert(\"inserido com sucesso\")</script>";
?>