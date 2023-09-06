<?php

include('conexaoBD.php');
$id = $_GET['id'];//pega a variavel que esta no link
$busca = mysqli_query($conexao, "select * from usuario where id = '$id'");//pega tudo 
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
        <label>nome: </label> <input type="text" name="nome" value=<?php echo $resultado[1]?> id="username"> <br/>
        <label>sobrenome: </label> <input type="text" name="sobrenome" value=<?php echo $resultado[2]?>  id="gmail"> <br>
        <label>tipo: </label> <input type="text" name="tipo" value=<?php echo $resultado[3]?> id="senha"> <br/>
        <input type="submit"   value="enviar">
    </form>
</body>
</html>

<?php
    if(!empty($_POST)){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $tipo = $_POST['tipo'];

    mysqli_query($conexao, "Update usuario set nome = '$nome', sobrenome = '$sobrenome', tipo = '$tipo' where id = '$id'");
    echo "<script>alert('editado com sucesso'); window.location.href = '../HTML/home.html';</script>";

}

?>
