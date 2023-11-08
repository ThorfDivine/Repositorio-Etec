<?php 
session_start();
include("./conexao.php");
$idVaga = $_POST['idVaga'];
$cpf = $_SESSION['cpf'];

mysqli_query($con, "insert into interesse(id_usuario, id_vaga, interessado, aprovacao) values ('$cpf', '$idVaga', true, '2' )");

?>