<?php 
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $SB = $n1 * 20;
    $SL = $SB - $n2;

    echo "o salario bruto do funcionario é de ".$SB;
    echo " ja o salario líquido dele é de ".$SL;
?>