
<?php
    
    include('conectarPhp.php');

    @$username = $_POST["username"];
    @$gmail = $_POST["gmail"];
    @$senha = $_POST["senha"];
    
   
        
        $gravar = mysqli_query($conexao, "insert into usuario(usarname, gmail, senha) values('$username', '$gmail', '$senha')" );
        if ($gravar){
            echo "<br/>gravação bem sucedida";
        }else{
            echo "<br/> erro de gravação";
        }
    

    ?>