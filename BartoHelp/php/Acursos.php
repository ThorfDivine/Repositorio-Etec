<?php 
session_start();
include("./conexao");

$instituicao = $_POST['instituicao'];
$inicio = $_POST['inicio'];
$tipo = $_POST['tipo'];
$cpf = $_SESSION['cpf'];

if($fim =="em curso"){
    $conclusao=false;
    $fim="";
}else{
    $conclusao=true;
    $fim=$_POST['fim'];
}

mysqli_query($con, "insert into cursos(id_user, tipo, instituicao, data_inicio, data_fim, conclusao) values('$cpf', '$tipo', '$instituicao', '$inicio', '$fim', '$conclusao' ) ");

header("location:");
?>