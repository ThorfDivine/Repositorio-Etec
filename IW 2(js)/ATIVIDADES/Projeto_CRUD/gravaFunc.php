<?php

include('conexao.php');

$nome= $_POST['nome'];
$end = $_POST['endereco'];
$formacao = $_POST['formacao'];
$setor = $_POST['setor'];
$telefone_setor = $_POST['telefone_setor'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$salario = $_POST['salario'];
$carteira = $_POST['carteira'];
$data_adm = $_POST['data_adm'];

$sql = "INSERT INTO funcionarios (nome, endereco, formacao, setor, telefone_setor, celular, email, salario, carteira, data_adm) VALUES('$nome','$end','$formacao','$setor','$telefone_setor','$celular','$email','$salario','$carteira','$data_adm')";
$insert = mysqli_query($con,$sql);

?>