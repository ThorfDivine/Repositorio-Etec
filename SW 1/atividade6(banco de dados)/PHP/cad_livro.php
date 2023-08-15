<?php
    
    include('conexaoBD.php');

    @$ISBN = $_POST["ISBN"];
    @$Titulo = $_POST["Titulo"];
    @$autor = $_POST["autor"];
    @$categoria = $_POST["categoria"];
    @$editora = $_POST["editora"];
    @$paginas = $_POST["paginas"];
    @$descricao = $_POST["descricao"];
        //gravando no banco
        $gravar = mysqli_query($conexao, "insert into livro(ISBN, Titulo, autor, categoria, editora, paginas, descricao) values('$ISBN', '$Titulo', '$autor','$categoria','$editora','$paginas','$descricao')" );
        if ($gravar){
            echo "<br/>gravação bem sucedida";
        }else{
            echo "<br/> erro de gravação";
        }
    ?>