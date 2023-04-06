<?php

$com = $_POST['com'];
$alt = $_POST['alt'];
$lar = $_POST['lar'];

$vol = $lar * $alt * $com;

echo "seu vol total é : ".$vol."m<sup>3</sup>";

?>