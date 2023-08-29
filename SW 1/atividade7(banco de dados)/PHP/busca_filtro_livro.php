


<?php 
    include('conexaoBD.php');
    if (!empty($_POST)) {
        echo "<table border=1>";
        if ($_POST['valurBusca'] == "") {

            $valor = strtolower($_POST['valurBusca']);
            $busca = mysqli_query($conexao, "select * from livro");
            $resultado;
                
            while($resultado = mysqli_fetch_row($busca)){

                echo "<tr>";
                echo "<td>".$resultado[0]."</td>";
                echo "<td>".$resultado[1]."</td>";
                echo "<td>".$resultado[2]."</td>";
                echo "<td>".$resultado[3]."</td>";
                echo "<td>".$resultado[4]."</td>";
                echo "<td>".$resultado[5]."</td>";
                echo "<td>".$resultado[6]."</td>";
                //passagem por link de variaveis
                echo "<td><a href='deletar.php?id=".$resultado[0]."' onclick='return confirm(\"Desaja realmente excluir\")'><img style='height:25px;' src='lata-de-lixo.png'></a></td>";
                //precisamos mandar a variavel pra esse outro php, se tivesse mais de um colocaria um &nomevar
                //com o arquivo?variavel, tal "?" faz com que insira uma var logo na frente
                echo "</tr>";

            }
        }else{

            $valor = strtolower($_POST['valurBusca']);
            $busca = mysqli_query($conexao, "select * from livro where Titulo like '%$valor%'");
            $resultado;

            while($resultado = mysqli_fetch_row($busca)){//mysqli_fetch_row retorna o numero de linhas
                echo "<tr>";
                echo "<td>".$resultado[0]."</td>";
                echo "<td>".$resultado[1]."</td>";
                echo "<td>".$resultado[2]."</td>";
                echo "<td>".$resultado[3]."</td>";
                echo "<td>".$resultado[4]."</td>";
                echo "<td>".$resultado[5]."</td>";
                echo "<td>".$resultado[6]."</td>";
                echo "<td><a href='deletar.php?id=".$resultado[0]."' onclick='return confirm(\"Desaja realmente excluir\")'><img style='height:25px;' src='lata-de-lixo.png'></a></td>";
                echo "</tr>";

            }
        }
        echo "</table>";
    }
?>