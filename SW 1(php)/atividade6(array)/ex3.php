<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1 for="">bem vindo a tela de login, preciso que voce se inscreva e inscreva +4 pessoas: </h1><br>
        <hr>
        pessoa1 <br/>
        <label>nome: </label><input type="text" name="name1"> <br/>
        <label>gmail: </label><input type="text" name="gmail1"> <br/>
        <label>senha: </label><input type="password" name="senha1"><br/>
        <hr>
        pessoa 2 <br/>
        <label>nome: </label><input type="text" name="name2"> <br/>
        <label>gmail: </label><input type="text" name="gmail2"> <br/>
        <label>senha: </label><input type="password" name="senha2"><br/>
        <hr>
        pessoa 3 <br/>
        <label>nome: </label><input type="text" name="name3"> <br/>
        <label>gmail: </label><input type="text" name="gmail3"> <br/>
        <label>senha: </label><input type="password" name="senha3"><br/>
        <hr>
        pessoa 4 <br/>
        <label>nome: </label><input type="text" name="name4"> <br/>
        <label>gmail: </label><input type="text" name="gmail4"> <br/>
        <label>senha: </label><input type="password" name="senha4"><br/>
        <hr>
        pessoa 5 <br/>
        <label>nome: </label><input type="text" name="name5"> <br/>
        <label>gmail: </label><input type="text" name="gmail5"> <br/>
        <label>senha: </label><input type="password" name="senha5"><br/>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php
@$arrayName = array(
    array('nome' => $_POST['name1'],'gmail' => $_POST['gmail1'], 'senha' => $_POST['senha1']),
    array('nome' => $_POST['name2'],'gmail' => $_POST['gmail2'], 'senha' => $_POST['senha2']),
    array('nome' => $_POST['name3'],'gmail' => $_POST['gmail3'], 'senha' => $_POST['senha3']),
    array('nome' => $_POST['name4'],'gmail' => $_POST['gmail4'], 'senha' => $_POST['senha4']),
    array('nome' => $_POST['name5'],'gmail' => $_POST['gmail5'], 'senha' => $_POST['senha5'])
);
    for ($i=0; $i < 5; $i++) { 
        echo '<hr> pessoa: '.$i;
        echo 'o nome da pessoa '.$i.' é: '.$arrayName[$i]['nome']."<br/>";
        echo 'o gmail da pessoa '.$i.' é: '.$arrayName[$i]['gmail']."<br/>";
        echo 'a senha da pessoa '.$i.' é: '.$arrayName[$i]['senha']."<br/>";
    }
  



?>