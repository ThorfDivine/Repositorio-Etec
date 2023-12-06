<?php
$con = mysqli_connect("localhost","root","","crm");

// Check connection
if (mysqli_connect_errno()) {
  echo "Falha na Conexão com o MySQL: " . mysqli_connect_error();
  exit();
}
?>