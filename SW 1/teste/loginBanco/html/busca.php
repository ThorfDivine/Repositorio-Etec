<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gustavo batisat de Oliveira Santos">
    <link rel="stylesheet" href="../css/menu2.css">
    <script src="../js/menu2.js"></script>
    <title>site do gustavo</title>
</head>
<body onload="openPage()" >

    <script> 
    //var responsavel por abrir e fachar o menu
    let n1;
    let n2;
    //lógica por tras da var    
    </script>

    
<div class="super-pai">

    <div class="menu" id="menu">
    <!--menu-->
        <header class="headerMenu" id="headerMenu" >
            <div class="triangulo1" id="triangulo1"></div>
            <div class="Menu1" id="Menu1" onmouseenter="ThorfDivineOpen()" onmouseleave="ThorfDivineClose()"onclick=" alterador()" >
                <h1 class="MenuThorfDivine" id="ThorfDivine">ThorfDivine</h1>
            </div>
            <div class="triangulo2" id="triangulo2"/></div>
        </header>

    <!--mini-menu-->
        <ul class="nav-list" id="nav-list" >
            <li><p class="opcao" id="op1" onclick="cs1() ,alterador2();"></p>
                <p class="opcaomat" id="opcaomat1" onclick="cs11()">iW</p>
                <p class="opcaomat" id="opcaomat2" onclick="cs12()">SW</p>
                <p class="opcaomat" id="opcaomat3" onclick="cs13()">gcW</p>
            </li>
            <li><a href="https://github.com/ThorfDivine" class="opcao" id="op2" onclick="cs2()"></a></li>
            <li><a href="" class="opcao" id="op3" onclick="cs3()"></a></li>
        </ul>
    </div>

    <!--restante-->
    <div class="pai" id="pai">

       <div class="mostraTudo">
            

                <?php
                    include("../php/conectarPhp.php");

                    $busca =  mysqli_query($conexao, "SELECT * from usuario");

                    //guardando os dados buscados dentro de uma var, porem vem tudo embaralhado, temos que serparar de maneira correta
                    //tem fuinções no SQLI chamadas fetch, funções pra pegar e desfazer o bolo
                    //mysqli_fetch_row() separa por colunas e guarda em uma variavel
            
                    $resultado =  mysqli_fetch_row($busca);

                    $data = '2020-08-15 15:09:10';
                    $timestamp = strtotime($data);
                    print_r("<br>".getdate($timestamp)."<br>");
            
                    while ($resultado=mysqli_fetch_row($busca)/*while automatizado para que cada vez que repita passe para a próxima linha tipo um for each para dados*/) {

                        //$now = (new DateTime())->getTimestamp();
                        //$data = (mysqli_query($conexao, "select data_nascimento from usuario where id_user = '$resultado[0]'")+"00:00:00")->getTimestamp();
                        //$idade = getdate($now - $data);
                    echo "<tr>";
                    echo "<td> id_user: ".$resultado[0]."</td>";
                    echo "<td> cpf: ".$resultado[1]."</td>";
                    echo "<td> nome: ".$resultado[2]."</td>";
                    echo "<td> email: ".$resultado[3]."</td>";
                    echo "<td> senha: ".$resultado[4]."</td>";
                    echo "<td> idade".$resultado[5]."</td>";
                    echo "<td>".$resultado[6]."</td>";
                    echo "</tr>";
                }
                ?>                
            

       </div>
        
    </div>

</div>


</body>
</html>