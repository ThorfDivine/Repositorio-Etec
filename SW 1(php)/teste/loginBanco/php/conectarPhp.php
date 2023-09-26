<?php 
    //procedimento padrão de conexao MySQL com PHP
    @$conexao = mysqli_connect("localhost:3306", "root", "", "thorfdivine"); 

    if (!$conexao){
    die("Erro de conexão: ".mysqli_connect_error());//die mata a tentativa de conexão do banco de dados
    //mostra se tem erro e qual o erro
    }
    ?>