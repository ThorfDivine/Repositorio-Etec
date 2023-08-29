<?php 
    include('conectarPhp.php');
    if (!empty($_POST)) {
        echo "<table border=1>";
        if ($_POST['valurBusca'] == "") {

            $valor = strtolower($_POST['valurBusca']);
            $busca = mysqli_query($conexao, "select * from usuario");
            $resultado;
                
            while($resultado = mysqli_fetch_row($busca)){

                echo "<tr>";
                echo "<td>".$resultado[0]."</td>";
                echo "<td>".$resultado[1]."</td>";
                echo "<td><a href='deletar.php'>Deletar</a></td>";
                echo "</tr>";

            }
        }else{

            $valor = strtolower($_POST['valurBusca']);
            $busca = mysqli_query($conexao, "select * from usuario where username like '%$valor%'");
            $resultado;

            while($resultado = mysqli_fetch_row($busca)){
                echo "<tr>";
                echo "<td>".$resultado[0]."</td>";
                echo "<td>".$resultado[1]."</td>";
                echo "<td><a href='deletar.php'>Deletar</a></td>";
                echo "</tr>";

            }
        }
        echo "</table>";
    }
?>