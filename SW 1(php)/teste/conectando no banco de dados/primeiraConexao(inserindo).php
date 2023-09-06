
<?php
    
    include('conectarPhp.php');

    @$username = $_POST["username"];
    @$gmail = $_POST["gmail"];
    @$senha = $_POST["senha"];
        //gravando no banco
        $gravar = mysqli_query($conexao, "insert into usuario(username, gmail, senha) values('$username', '$gmail', '$senha')" );
        if ($gravar){
            echo "<br/>gravação bem sucedida";
        }else{
            echo "<br/> erro de gravação";
        }

        //SQL de busca: retorna para o PHP os dados em formato de vetor;
        //Após o retorno do vetor temos de desfazero mesmo para exibir os dados corretamente;

        echo "<table border=1>";
        $busca =  mysqli_query($conexao, "SELECT * from usuario");

        //guardando os dados buscados dentro de uma var, porem vem tudo embaralhado, temos que serparar de maneira correta
        //tem fuinções no SQLI chamadas fetch, funções pra pegar e desfazer o bolo
        //mysqli_fetch_row() separa por colunas e guarda em uma variavel

        $resultado =  mysqli_fetch_row($busca);

        while ($resultado=mysqli_fetch_row($busca)/*while automatizado para que cada vez que repita passe para a próxima linha tipo um for each para dados*/) {
        echo "<tr>";
        echo "<td> username: ".$resultado[0]."</td>";
        echo "<td> gmail: ".$resultado[1]."</td>";
        echo "<td> senha: ".$resultado[2]."</td>";
        echo "</tr>";
    }
        echo "</table>";


    

    ?>