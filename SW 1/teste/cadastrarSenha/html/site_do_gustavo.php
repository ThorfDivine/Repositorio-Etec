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

       <div class="login">
        <form action="../php/logar.php" class="form_logar">
            <div class="title_login"><h2>login</h2> <p>por favor insira seus dados</p></div>
            <div clas="login">
                <div class="rainbow"><input type="email" name="gmail" placeholder="gmail" class="input_login"></div><br>
                <label>senha:</label>
                        <div class="rainbow">
                            <div class="input_login">
                                <input type="password" maxlength="20" id="senhae" name="senha" class="input_login_senha">
                                <img src="../IMG/zoio_zoro_close.jpg" class="zoro" id="zoro" onclick="abrindo()" >
                            </div> 
            </div>
            <div class="esqueceu">
                <p>esqueceu a senha?</p><a href="cadastro.php"><p>não é cadastrado?</p></a>
            </div>
            <div class="rainbow2"><input class="logar" type="submit" value="logar"></div>
            </form>
       </div>
        
    </div>

</div>


</body>
</html>