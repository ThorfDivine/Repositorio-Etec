
let who
let linkWho
let item1
let LinkIt1
let LinkIt2
let item3

let search
    search = ''

let logotipo
    logotipo = '../../contents/logo/logo.png'
let loginLnk
    loginLnk = '../login.php'

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
            item2 = 'Meus Certificados'
        LinkIt2 = './meusCertificados.php'

        item3 = `<div class="separadorCC"></div><div class="certificados flexR centralize"><div class="redPoint"></div><a href="${LinkIt2}"><p>${item2}</p></a></div>`
    
    }else if(document.title == 'BartoHelp - Area do Candidato'){

        who = 'Candidato'
        linkWho = '#top'

        item1 = 'Meus Anuncios'
        LinkIt1 = './meusCertificados.php'

        let item2
            item2 = 'Meus Certificados'
        LinkIt2 = './meusCertificados.php'

        item3 = `<div class="separadorCC"></div><div class="certificados flexR centralize"><div class="redPoint"></div><a href="${LinkIt2}"><p>${item2}</p></a></div>`

        search = '<div class="search"></div>'

    }else if(document.title == 'BartoHelp - Certificados'){

        who = 'Candidato'
        linkWho = './areaDoCandidato.php'

        item1 = 'Meus Certificados'
        LinkIt1 = './meusCertificados.php'

        item3 = ''

        search = '<div class="search"></div>'
        
    }else if(document.title == 'BartoHelp - Meus Certificados'){

        who = 'Candidato'
        linkWho = './areaDoCandidato.php'

        item1 = 'Cadastrar Certificados'
        LinkIt1 = './certificados.php'

        item3 = ''

        search = '<div class="search"></div>'
        
    }else if(document.title == 'BartoHelp - Area do Usuário'){

        who = 'Usuário'
        linkWho = '#top'

        item1 = 'Meus Anúncios'
        LinkIt1 = './meusAnuncios.php'

        item3 = ''

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

        homeLnk = './home.php'

        who = 'usuário'
        linkWho = './areaDoUsuario.php'

    }else if(document.title == 'BartoHelp - Meus Currículos'){

        logotipo = '../../contents/logo/logo.png'

        who = 'Candidato'
        linkWho = './areaDoCandidato.php'
        
        item1 = 'Criar Currículo'
        LinkIt1 = './curriculos.php'

        desconectLnk = '../desconectar.php'

        item3 = ''

        homeLnk = './home.php'

    }else if(document.title == 'BartoHelp - Vagas'){

        who = 'Usuário'
        linkWho = './areaDoUsuario.php'
        
        item1 = 'Criar anúncio'
        LinkIt1 = './criarVagas.php'

        desconectLnk = './desconectar.php'

        item3 = ''

        homeLnk = './home.php'

    }else{

        who = 'usuário'
        linkWho = './areaDoUsuario.php'
        
        item1 = 'Meus anúncios'
        LinkIt1 = './vagas.php'

        item3 = ''
    }

let content
    content = `<div class="conteinerLgCC centralize flexC"><logo><a href="${homeLnk}"><img src="${logotipo}" /></a></logo><div class="flexR conteinerCC"><div class="curriculos flexR centralize">${redPoint} <a href="${LinkIt1}"><p>${item1}</p></a></div>${item3}</div></div>${search}<div class="user centralize"><div><a href="${linkWho}"><p>Área do ${who}</p></a><p id="sair"> Sair: <i style="font-size: .8rem;"><a href='${desconectLnk}'>desconectar</a></i></p></div></div>`

    document.querySelector('header').innerHTML = content