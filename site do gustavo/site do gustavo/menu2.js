function alterador() {
        
    if(n1 == null){
    n1 = 0
    console.log('n1 era nulo, agora é zero')}
    if(n1 != null){
        n1++;
        console.log('n1 era 0, agora é 1')
    }
    if (n1 > 1) {
        console.log('ele é maior que 1')
    }
    if (n1 == 1) {
        navegacaoabrir();
        console.log('n1 era 1, então abri') 
    }
    if (n1 == 2) {
        navegacaofechar();
        console.log('n1 era 2, então fechei ')  
    }

}

function alterador2(){
    if(n2 == null){
        n2 = 0
        console.log('n1 era nulo, agora é zero 2')
    }

    if(n2 != null){
        n2++;
        console.log('n1 era 0, agora é 1 2')
    }

    if (n2 > 1) {
        console.log('ele é maior que 1  2')
    }

    if (n2 == 1) {
        navegacaoabrir2();
        console.log('n1 era 1, então abri2') 
    }

    if (n2 == 2) {
        navegacaofechar2();
        console.log('n1 era 2, então fechei 2')  
    }
}

function navegacaoabrir2(){
    
    let opcaomat1 = document.getElementById('opcaomat1');
    let opcaomat2 = document.getElementById('opcaomat2');
    let opcaomat3 = document.getElementById('opcaomat3');

    opcaomat3.style.display = "block";
    opcaomat2.style.display = "block";
    opcaomat1.style.display = "block";

}
//lógica bruta de fechar o menu
function navegacaofechar2(){
    let opcaomat1 = document.getElementById('opcaomat1');
    let opcaomat2 = document.getElementById('opcaomat2');
    let opcaomat3 = document.getElementById('opcaomat3');


    opcaomat3.style.display = "none";
    opcaomat2.style.display = "none";
    opcaomat1.style.display = "none";
    console.log('declarei ele como 0 2')
    n2 = 0;
}


//lógica bruta da aparecia do menu(abrir)
function navegacaoabrir(){
    let nav = document.getElementById('nav-list');
    let port = document.getElementById('port');
    let op1 = document.getElementById('op1');
    let op2 = document.getElementById('op2');
    let op3 = document.getElementById('op3');


    op1.innerHTML = "matérias"
    op2.innerHTML = "GitHub"
    op3.innerHTML = "sair"
    nav.style.position="absolute";
    nav.style.zIndex="2"
    nav.style.height = "10em";  
    port.style.position="block";
    

}
//lógica bruta de fechar o menu
function navegacaofechar(){
    let nav = document.getElementById('nav-list');
    let op1 = document.getElementById('op1');
    let op2 = document.getElementById('op2');
    let op3 = document.getElementById('op3');

    opcaomat3.style.display = "none";
    opcaomat2.style.display = "none";
    opcaomat1.style.display = "none";
    op1.innerHTML = ""
    op2.innerHTML = ""
    op3.innerHTML = ""
    nav.style.height = "0";
    n1 = 0;
    n2 = 0;
    console.log('declarei ele como 0')

}

function cs1() {
    let headerMenu = document.getElementById('headerMenu');
    let nav = document.getElementById('nav-list');
    let opcaomat1 = document.getElementById('opcaomat1');
    let opcaomat2 = document.getElementById('opcaomat2');
    let opcaomat3 = document.getElementById('opcaomat3');

    headerMenu.style.transition = "0.5s";

    opcaomat3.style.display = "block";
    opcaomat2.style.display = "block";
    opcaomat1.style.display = "block";

    nav.style.height = "11em";


}

function cs11(){
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let triangulo2 = document.getElementById('triangulo2');

    headerMenu.style.padding = "0 0 0 0";
    Menu1.style.width = "100%"
    if (Menu1.style.width == "100%") {
        triangulo1.style.display = "none";
        triangulo2.style.display = "none";
    }

    setTimeout(function() {
        window.location.href = "materias/iw.html";
    }, 350);
}

function cs12(){
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let triangulo2 = document.getElementById('triangulo2');

    headerMenu.style.padding = "0 0 0 0";
    Menu1.style.width = "100%"
    if (Menu1.style.width == "100%") {
        triangulo1.style.display = "none";
        triangulo2.style.display = "none";
    }

    setTimeout(function() {
        window.location.href = "materias/sw.html";
    }, 350);
}


function cs13(){
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let triangulo2 = document.getElementById('triangulo2');

    headerMenu.style.padding = "0 0 0 0";
    Menu1.style.width = "100%"
    if (Menu1.style.width == "100%") {
        triangulo1.style.display = "none";
        triangulo2.style.display = "none";
    }

    setTimeout(function() {
        window.location.href = "materias/gcw.html";
    }, 350);
}


function cs2() {
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let triangulo2 = document.getElementById('triangulo2');

    headerMenu.style.padding = "0 0 0 0";
    Menu1.style.width = "100%"
    if (Menu1.style.width == "100%") {
        triangulo1.style.display = "none";
        triangulo2.style.display = "none";
    }

    setTimeout(function() {
        window.location.href = "materias/sw.html";
    }, 350);

}

function cs3() {
    let headerMenu = document.getElementById('headerMenu'); 
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let triangulo2 = document.getElementById('triangulo2');

    headerMenu.style.padding = "0 0 0 0";
    Menu1.style.width = "100%"
    if (Menu1.style.width == "100%") {
        triangulo1.style.display = "none";
        triangulo2.style.display = "none";
    }

    setTimeout(function() {
        window.location.href = "materias/gcw.html";
    }, 350);
}

function openPage() {
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let triangulo2 = document.getElementById('triangulo2');

    headerMenu.style.transition = "0.5s";
    headerMenu.style.padding = "0 0 0 27%";
    Menu1.style.width = "20em"
    

    if(Menu1.style.width == "20em" ){
        setTimeout(function (params) {
            triangulo1.style.display = "block";
            triangulo2.style.display = "block";
        }, 90);
       
    }
    

}

function ThorfDivineOpen(){
    let headerMenu = document.getElementById('headerMenu');
    let Menu1 = document.getElementById('Menu1');
    let nav = document.getElementById('nav-list');

    headerMenu.style.transition = "0.5s";
    headerMenu.style.padding = "0 0 0 25%";
    Menu1.style.width = "24em";
    nav.style.margin = "0 0 0 31.1%"
    nav.style.width = "24em"
    
}


function ThorfDivineClose(){
    let headerMenu = document.getElementById('headerMenu');
    let Menu1 = document.getElementById('Menu1');
    let nav = document.getElementById('nav-list');

    headerMenu.style.transition = "0.5s";
    headerMenu.style.padding = "0 0 0 27%";
    Menu1.style.width = "20em";
    nav.style.margin = "0 0 0 33.1%"
    nav.style.width = "20em"

}

