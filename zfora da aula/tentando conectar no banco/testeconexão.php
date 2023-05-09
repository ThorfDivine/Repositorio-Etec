<?php 

include("testeconexãoconecta.php");

$nome = $_POST['nome'];
$mail = $_POST['mail'];
$senha = $_POST['senha'];


if (($nome != null) && ($mail != null) && ($senha != null)  ) {
    $query = "insert into produtos (nome, mail,senha) values ('$nome', '$mail', '$senha')";
}else {
    echo "digite todos os valores;";
}




?>