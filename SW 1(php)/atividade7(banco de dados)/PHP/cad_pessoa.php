<?php
    
    include('conexaoBD.php');

    @$nome = strtolower($_POST["nome"]);
    @$sobrenome = strtolower($_POST["sobrenome"]);
    @$tipo = strtolower($_POST["tipo"]);
        //gravando no banco
        $gravar = mysqli_query($conexao, "insert into usuario(nome, sobrenome, tipo) values('$nome', '$sobrenome', '$tipo')" );
        if ($gravar){
            echo "<script>alert('cadastrado com sucesso'); window.location.href = '../HTML/home.html';</script>";
        }else{
            echo "<br/> erro de gravação";
        } 

    ?>