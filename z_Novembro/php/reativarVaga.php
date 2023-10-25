<?
    include("./conexao.php");

    
    $idVaga = $_POST['idVaga'];

    mysqli_query($con, 
    "UPDATE vaga
    SET aberta = 1
    WHERE id_vaga = '$idVaga'")
?>