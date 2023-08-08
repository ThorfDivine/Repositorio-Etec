<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="">username: </label> <input type="text" name="username" id="username"> <BR/>
        <label for="">gmail: </label> <input type="text" name="gmail" id="gmail"> <br/>
        <label for="">senha: </label> <input type="text" name="senha" id="senha"> <BR/>
        <input type="button" value="enviar">
    </form>
    
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
    }

    ?>

</body>
</html>