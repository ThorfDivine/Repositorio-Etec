
<?php
    
    @$username = $_POST["username"];
    @$gmail = $_POST["gmail"];
    @$senha = $_POST["senha"];
    
    //procedimento padrão de conexao MySQL com PHP
    @$conexao = mysqli_connect("localhost:3306", "root", "", "conexao");
    //ordem: mysqli_connect(endereco_servidore, usuario_servidor, senha_servidor, banco_de_dados);

    if (!$conexao){
        die("Erro de conexão: ".mysqli_connect_error());
        //mostra se tem erro e qual o erro
    }else {
        echo "conexão bem sucedida";
        mysqli_query($conexao, "insert into usuario(usarname, gmail, senha) values('$username', '$gmail', '$senha')" );
        
    }

    ?>