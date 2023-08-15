<?php
    
    include('conexaoBD.php');

    @$nome = $_POST["nome"];
    @$sobrenome = $_POST["sobrenome"];
    @$tipo = $_POST["tipo"];
        //gravando no banco
        $gravar = mysqli_query($conexao, "insert into usuario(nome, sobrenome, tipo) values('$nome', '$sobrenome', '$tipo')" );
        if ($gravar){
            echo "<br/>gravação bem sucedida";
        }else{
            echo "<br/> erro de gravação";
        } 

    ?>