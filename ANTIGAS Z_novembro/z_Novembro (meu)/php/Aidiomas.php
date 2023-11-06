<?php 
session_start();
include("./conexao");


$cpf = $_SESSION['cpf'];
$idioma = $_POST['idioma'];
$nivel = $_POST['nivel'];


mysqli_query($con, "insert into idiomas(id_cliente, idioma, nivel) values('$cpf', '$idioma', '$nivel' ) ");

header("location:");
?>