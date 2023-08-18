<?php echo "<table border=1;>";
    include('conexaoBD.php');
    $valor = strtolower($_POST['valurBusca']);
    $busca = mysqli_query($conexao, "select * from livro where Titulo like '%$valor%'");
    $resultado;
    while($resultado = mysqli_fetch_row($busca)){
        echo "<tr>";
        echo "<td> ISBN: ".$resultado[0]."</td>";
        echo "<td> Titulo: ".$resultado[1]."</td>";
        echo "<td> autor: ".$resultado[2]."</td>";
        echo "<td> categoria: ".$resultado[3]."</td>";
        echo "<td> editora: ".$resultado[4]."</td>";
        echo "<td> paginas: ".$resultado[5]."</td>";
        echo "<td> descricao: ".$resultado[6]."</td>";
        echo "</tr>";
    }
    if ($resultado = mysqli_fetch_row($busca) == null ) {
        echo "<tr>";
        echo "<td> sem resultados </td>";
        echo "</tr>";
    }

    echo "</table>"
?>