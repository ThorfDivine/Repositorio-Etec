<?php

$bd = "bd"; 
$usuario = "root"; 
$senha = ""; 
$host = "localhost";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if ($mysqli -> connect_errno  ) {
    echo "falha na conexão: (".$mysqli -> connect_errno.") ".$mysqli -> connect_error;
}


?>