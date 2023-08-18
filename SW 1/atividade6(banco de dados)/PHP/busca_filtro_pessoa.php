<?php echo "<table border=1>";
    include('conexaoBD.php');
    $valor = $_POST['valurBusca'];
    $busca = mysqli_query($conexao, "select * from usuario where nome like '%$valor%'");
    $resultado;
    while($resultado = mysqli_fetch_row($busca)){
        echo "<tr>";
        echo "<td> id: ".$resultado[0]."</td>";
        echo "<td> nome: ".$resultado[1]."</td>";
        echo "<td> sobrenome: ".$resultado[2]."</td>";
        echo "</tr>";
    }
    if ($resultado = mysqli_fetch_row($busca) == null ) {
        echo "<tr>";
        echo "<td> sem resultados </td>";
        echo "</tr>";
    }
    echo "</table>"
?>