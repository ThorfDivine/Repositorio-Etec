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
        <label>nome: </label> <input type="text" name="nome" value=<?php echo $resultado[0]?>> <br/>
        <label>sobrenome: </label> <input type="text" name="sobrenome" value=<?php echo $resultado[1]?>> <br>
        <label>cpf: </label><input type="text" name="cpf" value=<?php $resultado[2]?>><br>
        <label>email: </label><input type="text"name="gmail" value=<?php $resultado[3]?>>
        <label>senha: </label> <input type="text" name="senha" value=<?php echo $resultado[4]?> id="senha"> <br/>
        <input type="submit"   value="enviar">
    </form>
</body>
</html>

<?php
    if(!empty($_POST)){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $gmail = $_POST['gmail'];
    $senha = $_POST['senha'];

    mysqli_query($conexao, "Update cliente set nome = '$nome',sobrenome='$sobrenome', cpf='$cpf', email = '$gmail', senha = '$senha' where cpf = '$id'");
    echo "<script>alert('editado com sucesso'); window.location.href = 'formBusca.html';</script>";

}

?>
