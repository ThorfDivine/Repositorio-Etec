<?php
 include('conexaoBD.php');

 $id = $_GET['id'];

 mysqli_query($conexao, "delete from cliente where cpf = '$id'");
 header('location: ../HTML/home.html');
?>