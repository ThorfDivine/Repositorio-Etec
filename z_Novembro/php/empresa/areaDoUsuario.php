<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fav-Icon -->
            <link rel="shortcut icon" href="../../contents/favIcon/favicon.ico" type="image/x-icon">
        <!-- end -->
        
        <!-- Material Icons -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- End -->
    <!-- ==================================================================================== -->
        <!-- CSS -->
            <link rel="stylesheet" href="../../style/style.css">
            <link rel="stylesheet" href="../../style/header.css">
            <link rel="stylesheet" href="../../style/areaUsuario.css">
        <!-- End -->
    <title>BartoHelp - Area do usuário</title>
</head>
<body>


    <!-- style="display: none;" -->
    <popup>
        <div class="conteiner flexC">
            <!-- close div -->
            <div class="close spaceBetween">
                <div></div>

                <div id="close">
                    <p>X</p>
                </div>
            </div>
            <!-- end close div -->

            <!-- form div -->
            <div class="form flexC">
                <form action="../updateEmpresa.php" method="post" class="flexR wrap_True">
                    <div class="topConteiner w100prc spaceEvenly">
                        <div class="conteinerInfo">
                            <label for="logotipo" class="lable">Logotipo atual:</label>
                            <div class="flexR alingCenter">
                                <div class="profilePicture_edite img_conteiner">
                                    <img src="../../contents/logotipos/download.png" alt="Foto de perfil">
                                </div>
                                <div class="editarImg">
                                    <label for="logotipo" class="alterar flexC alingCenter">
                                        <span class="material-symbols-outlined">edit</span> Alterar
                                    </label>
                                    <input type="file" name="logotipo" id="logotipo" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="conteinerInfo flexC">
                            <label for="nome" class="lable">Nome de usuário:</label>
                                <input type="text" name="nome" id="nome" class="nomeUser">
                        </div>
                    </div>
                        <!--  -->
                    <div class="duraRealidadeDoMacgiver flexC alingCenter">
                        <div class="conteinerAll spaceEvenly wrap_True">
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="cep" class="lable marginLeft12px">Cep: </label>
                                        <br><input type="text" name="cep" id="cep" class="input">
                                </div>
                                <div class="conteinerInfo">
                                    <label for="cnpj" class="lable marginLeft12px">Cnpj: </label>
                                        <br><input type="text" name="cnpj" id="cnpj" class="input">
                                </div>
                            </div>
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="cep" class="lable marginLeft12px">Email: </label>
                                        <br><input type="email" name="email" id="email" class="input">
                                </div>
                                <div class="conteinerInfo">
                                    <label for="fone" class="lable marginLeft12px">Telefone: </label>
                                        <br><input type="tel" name="fon" id="fone" class="input">
                                </div>
                            </div>
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="desc1" class="lable marginLeft12px">Descrição <i style="font-size: .58rem;">(1 linha) </i>: </label>
                                        <br><input type="text" name="desc1" id="desc1" class="input">
                                </div>
                                <div class="conteinerInfo">
                                    <label for="desc2" class="lable marginLeft12px">Descrição <i style="font-size: .58rem;">(paragrafo) </i>: </label>
                                        <br><textarea name="desc2" id="desc2" class="input"></textarea>
                                </div>
                            </div>
                            <div class="w100prc spaceEvenly">
                                <div class="conteinerInfo">
                                    <label for="senha" class="lable marginLeft12px">Senha: </label>
                                        <br><input type="password" name="pass" id="senha" class="input senhas">
                                </div>
                                <div class="conteinerInfo">
                                    <label for="confirm" class="lable marginLeft12px">Confirme sua senha: </label>
                                        <br><input type="password" name="confirm" id="confirm" class="input senhas">
                                </div>
                            </div>
                            <div class="w100prc centralize">
                                <div class="flexC alingCenter">
                                    <span class="material-symbols-outlined" id="eye"> visibility_off </span> <!-- Eye -->
                                    <br><p id="text_eye" style="font-size: 1rem;">Mostrar senhas</p>
                                </div>
                            </div>

                        </div>
                        <div class="marginTop23px centralize">
                            <input type="button" class="buttonPattern btnBlocked" value="...">
                        </div>
                    </div>
                
                </form>
            </div>
            <!-- form end -->
        </div>
    </popup>
    
    <header id="top"></header>

    <section class="bigMarginTop bigMarginBotom flexR spaceAround wrap_True">
        <div class="userDiv">
            <div class="paralaxLayout bgk_prlx">
            </div>
            <div class="userInfo flexR">
                <div class="profilePicture img_conteiner">
                    <img src="../../contents/logotipos/download.png" alt="">
                </div>
                <div class="infos">
                    <div class="userName">
                        <h1 id="userName">Dell Technologies</h1>
                    </div>
                    <div class="userInfos">
                        <p>cep - cnpj - email@email.com <br> Telefone: +55 11 12345-1234</p>
                    </div>
                </div>
                <div class="editar" id="editar">
                    <span class="material-symbols-outlined"> edit_square </span>
                    <h4>Editar</h4>
                </div>
            </div>
        </div>
            <!-- User card end -->

        <div class="sobre">
            <div class="titulo alingCenter">
                <h2 class="marginLeft12px">Sobre: </h2>
            </div>
            <div class="contentP">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, doloribus officiis, provident voluptatum itaque eum, molestiae excepturi nisi saepe adipisci omnis. Vero id architecto provident omnis numquam explicabo soluta mollitia accusamus eligendi. Illo harum dolores iste iusto, veritatis quod qui recusandae ut. Tempore perferendis ullam eveniet dolorum delectus excepturi aspernatur, voluptatibus eius harum qui.</p>
            </div>
        </div>

        <div class="vagas">
            <div class="titulo alingCenter">
                <h2 class="marginLeft12px">Vagas Anunciadas: </h2>
            </div>
            <div class="contentVagas flexR spaceEvenly wrap_True">
                <div class="cardVaga">
                    <div class="imgLogo img_conteiner">
                        <img src="../../contents/logotipos/download.png" alt="logo">
                    </div>
                    <div class="informacoes_da_vaga">
                        <p><strong>Programador back-end jr.</strong></p><br>

                        <div class="detalhes_vaga">
                            <div class="detalhes_p flexR">
                                <p id="insc"><i id="inscricoes">N°</i> inscrições</p>
                                <p>|</p>
                                <p id="status">status</p>
                                <div>
                                    <div class="flexC botoes">
                                        <button class="detalhes">Detalhes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h100prc flexR alingCenter">
                        <div class="editarVg">
                            <span class="material-symbols-outlined"> edit_note </span>
                        </div>
                        <div class="deletVg alingCenter">
                            <button class="lixeira"><span class="material-symbols-outlined">delete</span></button>
                        </div>
                    </div>
                </div>
                <div class="cardVaga">
                    <div class="imgLogo img_conteiner">
                        <img src="../../contents/logotipos/download.png" alt="logo">
                    </div>
                    <div class="informacoes_da_vaga">
                        <p><strong>Programador back-end jr.</strong></p><br>

                        <div class="detalhes_vaga">
                            <div class="detalhes_p flexR">
                                <p id="insc"><i id="inscricoes">N°</i> inscrições</p>
                                <p>|</p>
                                <p id="status">status</p>
                                <div>
                                    <div class="flexC botoes">
                                        <button class="detalhes">Detalhes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h100prc flexR alingCenter">
                        <div class="editarVg">
                            <span class="material-symbols-outlined"> edit_note </span>
                        </div>
                        <div class="deletVg alingCenter">
                            <button class="lixeira"><span class="material-symbols-outlined">delete</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

        <a href="#top">
            <div id="backTop" class="backTop">
            </div>
        </a>

    <footer></footer>

</body>
    <script src="../../js/header.js"></script>
    <script src="../../js/footer.js"></script>
    <script src="../../js/infoEdit.js"></script>
    <script src="../../js/createBttn.js"></script>
</html>