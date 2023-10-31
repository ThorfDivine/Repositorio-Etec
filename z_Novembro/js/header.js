
let who
let linkWho
let item1
let LinkIt1
let LinkIt2
let item3

let search
    search = '<div class="search centralize"><input type="text" class="surchInp" name="search" id="search" placeholder="Pesquisar..."><button class="searchBtn"><span class="material-symbols-outlined">search</span></button></div>'

let logotipo
    logotipo = '../../contents/logo/logo.png'
let loginLnk
    loginLnk = '../login.html'
let desconectLnk
    desconectLnk = '../desconectar.php'
let homeLnk
    homeLnk = './home.php'
let redPoint
    redPoint = '<div class="redPoint"></div>'

    //      ====================================================================================         \\

    if (document.title == 'BartoHelp - Candidato') {

        who = 'candidato'
        linkWho = './areaDoCandidato.php'

        item1 = 'Meus Currículos'
        LinkIt1 = './meusCurriculos.php'

        let item2
            item2 = 'Certificados'
        LinkIt2 = './certificados.php'

        item3 = `<div class="separadorCC"></div><div class="certificados flexR centralize"><div class="redPoint"></div><a href="${LinkIt2}"><p>${item2}</p></a></div>`
    
    }else if(document.title == 'BartoHelp - Area do Candidato'){

        search = '<div class="search"></div>'

    }else if(document.title == 'BartoHelp - Area do Usuário'){

        search = '<div class="search"></div>'

    }else if(document.title == 'BartoHelp - Currículos'){

        who = 'candidato'
        linkWho = './areaDoCandidato.php'

        search = ''

        desconectLnk = './desconectar.php'

        item1 = 'Meus Currículos'
        LinkIt1 = './meusCurriculos.php'
        
        item3 = ''

    }else if(document.title == 'BartoHelp - Criar Vagas'){

        logotipo = '../../contents/logo/logo.png'

        item1 = 'Meus anúncios'
        LinkIt1 = './vagas.php'

        item3 = ''

        search = ''
        desconectLnk = '../desconectar.php'
        homeLnk = '../../HTML/empresa/home.html'

        who = 'usuário'
        linkWho = '../../html/empresa/areaDoUsuario.html'

    }else if(document.title == 'BartoHelp - Area do Usuário'){

        search = ''

    }else if(document.title == 'BartoHelp - Meus Currículos'){

        logotipo = '../../contents/logo/logo.png'

        who = 'candidato'
        linkWho = '../../HTML/funcionario/areaDoCandidato.html'
        
        item1 = 'Criar Currículo'
        LinkIt1 = '../../HTML/funcionario/curriculos.html'

        desconectLnk = '../desconectar.php'

        item3 = ''

        homeLnk = '../../html/funcionario/home.html'

    }else if(document.title == 'BartoHelp - Vagas'){

        who = 'usuário'
        linkWho = '../../html/empresa/areaDoUsuario.html'
        
        item1 = 'Criar anúncio'
        LinkIt1 = './criarVagas.php'

        desconectLnk = './desconectar.php'

        item3 = ''

        homeLnk = '../../html/empresa/home.html'

    }else{

        who = 'usuário'
        linkWho = './areaDoUsuario.html'
        
        item1 = 'Meus anúncios'
        LinkIt1 = '../../php/empresa/vagas.php'

        item3 = ''
    }

let content
    content = `<div class="conteinerLgCC centralize flexC"><logo><a href="${homeLnk}"><img src="${logotipo}" /></a></logo><div class="flexR conteinerCC"><div class="curriculos flexR centralize">${redPoint} <a href="${LinkIt1}"><p>${item1}</p></a></div>${item3}</div></div>${search}<div class="user centralize"><div class="circle profilePic" name="profilePic" id="profilePic" style="display: none;"><img src="" alt=""></div><div class="profilePic"><a href="${linkWho}"><span class="material-symbols-outlined">account_circle</span></a></div><div><a href="${linkWho}"><p>Área do ${who}</p></a><p id="sair"> Sair: <i style="font-size: .8rem;"><a href='${desconectLnk}'>desconectar</a></i></p></div></div>`

    document.querySelector('header').innerHTML = content