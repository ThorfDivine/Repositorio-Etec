<?php
 include('conectarPhp.php');

 $id = $_GET['id'];

 mysqli_query($conexao, "delete from usuario where idUser = '$id'");
 header('location: formBusca.html');
?>