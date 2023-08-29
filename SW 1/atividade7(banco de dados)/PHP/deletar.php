<?php
 include('conexaoBD.php');

 $id = $_GET['id'];

 mysqli_query($conexao, "delete from livro where ISBN = '$id'");
 header('location: ../HTML/cadastrar_livro.html');
?>