<?php

include('conexaoBD.php');
$id = $_GET['id'];//pega a variavel que esta no link
$busca = mysqli_query($conexao, "select * from livro where ISBN = '$id'");//pega tudo 
$resultado=mysqli_fetch_array($busca);// guarda numa var
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="">ISBN do livro: </label> <input type="text" name="ISBN" value=<?php $resultado[0]?>> <br>
        <label for="">Título:  </label> <input type="text" name="Titulo" value=<?php $resultado[1]?>> <br>
        <label for="">Autor:  </label> <input type="text" name="autor" value=<?php $resultado[2]?>> <br>
        <label for="">Categoria: </label> <input type="text" name="categoria" value=<?php $resultado[3]?>> <br>
        <label for="">Editora: </label> <input type="text" name="editora" value=<?php $resultado[4]?>> <br>
        <label for="">N° de Paginas: </label> <input type="number" name="paginas" value=<?php $resultado[5]?>> <br>
        <label for="">Descrição: </label> <input type="text" name="descricao" value=<?php $resultado[6]?>> <br>
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>

<?php
    if(!empty($_POST)){
        @$ISBN = strtolower($_POST["ISBN"]);
        @$Titulo = strtolower($_POST["Titulo"]);
        @$autor = strtolower($_POST["autor"]);
        @$categoria = strtolower($_POST["categoria"]);
        @$editora = strtolower($_POST["editora"]);
        @$paginas = strtolower($_POST["paginas"]);
        @$descricao = strtolower($_POST["descricao"]);;

    mysqli_query($conexao, "Update livro set ISBN = '$ISBN', titulo = '$titulo', autor = '$autor', categoria = '$categoria', editora = '$editora', paginas='$paginas', descricao = '$descricao' where ISBN = '$id'");
    echo "<script>alert('editado com sucesso'); window.location.href = '../HTML/home.html';</script>";
    

}

?>
