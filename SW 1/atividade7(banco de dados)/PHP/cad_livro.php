<?php
    
    include('conexaoBD.php');

    @$ISBN = strtolower($_POST["ISBN"]);
    @$Titulo = strtolower($_POST["Titulo"]);
    @$autor = strtolower($_POST["autor"]);
    @$categoria = strtolower($_POST["categoria"]);
    @$editora = strtolower($_POST["editora"]);
    @$paginas = strtolower($_POST["paginas"]);
    @$descricao = strtolower($_POST["descricao"]);
        //gravando no banco
        $gravar = mysqli_query($conexao, "insert into livro(ISBN, Titulo, autor, categoria, editora, paginas, descricao) values('$ISBN', '$Titulo', '$autor','$categoria','$editora','$paginas','$descricao')" );
        if ($gravar){
            echo "<br/>gravação bem sucedida";
        }else{
            echo "<br/> erro de gravação";
        }
    ?>