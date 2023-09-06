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
        <label>nota: </label><input type="text" name="nota1"> <br/>
        <hr>
        pessoa 2 <br/>
        <label>nome: </label><input type="text" name="name2"> <br/>
        <label>nota: </label><input type="text" name="nota2"> <br/>
        <hr>
        pessoa 3 <br/>
        <label>nome: </label><input type="text" name="name3"> <br/>
        <label>nota: </label><input type="text" name="nota3"> <br/>
        <hr>
        pessoa 4 <br/>
        <label>nome: </label><input type="text" name="name4"> <br/>
        <label>nota: </label><input type="text" name="nota4"> <br/>
        <hr>
        pessoa 5 <br/>
        <label>nome: </label><input type="text" name="name5"> <br/>
        <label>nota: </label><input type="text" name="nota5"> <br/>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php
@$arrayName = array(
    array('nome' => $_POST['name1'],'gmail' => $_POST['nota1']),
    array('nome' => $_POST['name2'],'gmail' => $_POST['nota2']),
    array('nome' => $_POST['name3'],'gmail' => $_POST['nota3']),
    array('nome' => $_POST['name4'],'gmail' => $_POST['nota4']),
    array('nome' => $_POST['name5'],'gmail' => $_POST['nota5']),
);
    for ($i=0; $i < 5; $i++) { 
        echo '<hr> pessoa: '.$i."<br/>";
        echo 'o nome da pessoa '.$i.' é: '.$arrayName[$i]['nome']."<br/>";
        echo 'o gmail da pessoa '.$i.' é: '.$arrayName[$i]['gmail']."<br/>";
    }
  



?>