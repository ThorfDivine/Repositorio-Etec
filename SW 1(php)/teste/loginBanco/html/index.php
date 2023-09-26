<?php
    session_start();
    if (isset($_SESSION['PUDIMLogin7w7'])){
        $_SESSION['PUDIMLogado7w7'] = 0;
    }
?>
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

    <div id="menu">
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

       <div class="login">
            <?php if ($_SESSION['PUDIMLogado7w7'] == 0) {?>

                <a href="login.php"><h1 style="color: white">faça login!</h1></a>

            <?php } else{ ?>

                <h1 style="color: white">ola <?php echo $_SESSION['usuario']; ?>! seja bem vindo!</h1>

            <?php }?>

            <br>

            <p style="color: white">este texto todos poderão ver</p>

            <br>
            <?php if ($_SESSION['PUDIMLogado7w7'] == 1) {?>

                <p style="color: white">este texto só os logados poderão ver</p>

                <div class="userArea">
                    <div class='portaImg'>
                        <img src="../IMG/userImg.png" class= "userImg">
                    </div>

                    <div class='portaBotaoInfo'>
                        <div>
                            <h3><?php echo $_SESSION['usuario']; ?></h3>
                        </div>

                        <div class="portaCPFDeslog">
                           <h5>cpf: <?php echo $_SESSION['cpf']; ?></h4> 
                           <a href="../php/deslogar.php"><button class="btn_deslogar">deslogar</button></a>
                        </div>
                    </div>
                </div>

            <?php } ?>

       </div>
        
    </div>

</div>


</body>
</html>