<?php 
session_start();
include("./conexao.php");
$lingua = $_POST['lingua'];
$cpf = $_SESSION['cpf'];
if(isset($_POST['']) && !empty($_POST[''])){
mysqli_query($con,"INSERT into idiomas(cpf_cliente, idioma) values ('$cpf', '$lingua')");
echo "<script>alert(\"inserido com sucesso\")</script>";}
else{
    echo"post ta vazio";
}
?>