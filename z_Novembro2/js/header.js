
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
let desconectLnk
    desconectLnk = '../../php/desconectar.php'
let homeLnk
    homeLnk = './home.php'

    if (document.title == 'BartoHelp - Candidato') {

        who = 'candidato'
        linkWho = './areaDoCandidato.html'

        item1 = 'Currículos'
        LinkIt1 = './curriculos.html'

        let item2
            item2 = 'Certificados'
        LinkIt2 = './certificados.html'

        item3 = `<div class="separadorCC"></div><div class="certificados flexR centralize"><div class="redPoint"></div><a href="${LinkIt2}"><p>${item2}</p></a></div>`
    
    }else if(document.title == 'BartoHelp - Area do Candidato'){

        // Cod

    }else if(document.title == 'BartoHelp - Area do Usuário'){

        // Cod

    }else if(document.title == 'BartoHelp - Criar Vagas'|| document.title == 'BartoHelp - Editar Vagas'){

        logotipo = '../contents/logo/logo.png'

        item1 = 'Meus anúncios'
        LinkIt1 = '../HTML/empresa/vagas.php'

        item3 = ''

        search = ''
        desconectLnk = './desconectar.php'
        homeLnk = '../HTML/empresa/home.php'

        who = 'usuário'
        linkWho = '../../html/empresa/areaDoUsuário.php'

    }else if(document.title == 'BartoHelp - Currículos'){

        // Cod

    }else if(document.title == 'BartoHelp - Vagas' ){
        who = 'usuário'
        linkWho = './areaDoUsuário.php'
        
        item1 = 'Criar anúncio'
        LinkIt1 = '../../PHP/criarVagas.php' //Mudar pra ".php"

        item3 = ''
    }else{
        who = 'usuário'
        linkWho = './areaDoUsuário.php'
        
        item1 = 'Meus anúncios'
        LinkIt1 = './vagas.php'

        item3 = ''
    }

let content
    content = `<div class="conteinerLgCC centralize flexC"><logo><a href="${homeLnk}"><img src="${logotipo}" /></a></logo><div class="flexR conteinerCC"><div class="curriculos flexR centralize"><div class="redPoint"></div> <a href="${LinkIt1}"><p>${item1}</p></a></div>${item3}</div></div>${search}<div class="user centralize"><div class="circle profilePic" name="profilePic" id="profilePic" style="display: none;"><img src="" alt=""></div><div class="profilePic"><a href="../login.html"><span class="material-symbols-outlined">account_circle</span></a></div><div><a href="${linkWho}"><p>Área do ${who}</p></a><p id="sair"> Sair: <i style="font-size: .8rem;"><a href='${desconectLnk}'>desconectar</a></i></p></div></div>`

    document.querySelector('header').innerHTML = content