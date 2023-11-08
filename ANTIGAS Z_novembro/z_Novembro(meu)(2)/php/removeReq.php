<?php
session_start();
include("./conexao.php");
if (!isset($_SESSION['Pudim7w7']) || $_SESSION['Pudim7w7'] =="" || $_SESSION['Pudim7w7'] == null) {
    header('Location: ../../html/login.html');
}   

$idHabilidade = $_POST['habilidade'];
$idVaga = $_GET['idVaga'];





$gravar = mysqli_query($con, 
"DELETE FROM competencia_vaga
    WHERE id_vaga = $idVaga
    and id_competencia = $idHabilidade");
        
    


?>