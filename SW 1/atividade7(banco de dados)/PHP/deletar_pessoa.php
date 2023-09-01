<?php
 include('conexaoBD.php');

 $id = $_GET['id'];

 mysqli_query($conexao, "delete from usuario where id = '$id'");
 header('location: ../HTML/home.html');
?>