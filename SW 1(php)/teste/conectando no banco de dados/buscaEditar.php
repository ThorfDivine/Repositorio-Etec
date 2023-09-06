<?php

include('conectarPhp.php');
$id = $_GET['id'];//pega a variavel que esta no link
$busca = mysqli_query($conexao, "select * from usuario where iduser = '$id'");//pega tudo 
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
        <label>username: </label> <input type="text" name="username" value=<?php echo $resultado[1]?> id="username"> <br/>
        <label>gmail: </label> <input type="text" name="gmail" value=<?php echo $resultado[2]?>  id="gmail"> <br>
        <label>senha: </label> <input type="text" name="senha" value=<?php echo $resultado[3]?> id="senha"> <br/>
        <input type="submit"   value="enviar">
    </form>
</body>
</html>

<?php
    if(!empty($_POST)){
    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $senha = $_POST['senha'];

    mysqli_query($conexao, "Update usuario set username = '$username', gmail = '$gmail', senha = 'senha' where idUser = '$id'");
    echo "<script>alert('editado com sucesso'); window.location.href = 'formBusca.html';</script>";

}

?>
