<?php echo "<table border=1>";
        include('conexaoBD.php');
        $busca =  mysqli_query($conexao, "SELECT * from livro");

        //guardando os dados buscados dentro de uma var, porem vem tudo embaralhado, temos que serparar de maneira correta
        //tem fuinções no SQLI chamadas fetch, funções pra pegar e desfazer o bolo
        //mysqli_fetch_row() separa por colunas e guarda em uma variavel

        $resultado =  mysqli_fetch_row($busca);

        while ($resultado=mysqli_fetch_row($busca)/*while automatizado para que cada vez que repita passe para a próxima linha tipo um for each para dados*/) {
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
        echo "</table>"; ?>