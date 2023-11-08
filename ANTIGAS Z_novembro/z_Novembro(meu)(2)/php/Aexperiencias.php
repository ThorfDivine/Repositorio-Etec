<?php 
session_start();
include("./conexao");


$cpf = $_SESSION['cpf'];
$tipo = $_POST['tipo'];
$instituicao = $_POST['instituicao'];
$descricao = $_POST['descricao'];
$inicio = $_POST['inicio'];

if($fim =="em curso"){
    $conclusao=false;
    $fim="";
}else{
    $conclusao=true;
    $fim=$_POST['fim'];
}

mysqli_query($con, "insert into experiencia(id_cliente, tipo, instituicao, descricao,ano_inicio, ano_conclusao, concluido) values('$cpf', '$tipo', '$instituicao', '$descricao','$inicio', '$fim', '$conclusao' ) ");

header("location:");
?>