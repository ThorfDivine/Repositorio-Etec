<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = 0;
$cal= $_POST['cal'];

if($cal== "null"){ echo "quer o que meu bom?"};
if($cal=="som"){$n3 = $n1 + $n2; echo "o valor da sua conta foi: ".$n3};
if($cal=="sub"){$n3 = $n1 - $n2; echo "o valor da sua conta foi: ".$n3};
if($cal=="mul"){$n3 = $n1 * $n2; echo "o valor da sua conta foi: ".$n3};
if($cal=="div"){$n3 = $n1 / $n2; echo "o valor da sua conta foi: ".$n3};


?>