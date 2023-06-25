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
    console.log('n1 era nulo, agora é zero 2')}
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
let nav = document.getElementById('nav-list');
let opcaomat1 = document.getElementById('opcaomat1');
let opcaomat2 = document.getElementById('opcaomat2');
let opcaomat3 = document.getElementById('opcaomat3');

opcaomat3.style.display = "block";
opcaomat2.style.display = "block";
opcaomat1.style.display = "block";

}
//lógica bruta de fechar o menu
function navegacaofechar2(){
let nav = document.getElementById('nav-list');
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
let op1 = document.getElementById('op1');
let op2 = document.getElementById('op2');
let op3 = document.getElementById('op3');
let opcaomat1 = document.getElementById('opcaomat1');
let opcaomat2 = document.getElementById('opcaomat2');
let opcaomat3 = document.getElementById('opcaomat3');


    op1.innerHTML = "matérias"
    op2.innerHTML = "GitHub"
    op3.innerHTML = "sair"

    nav.style.height = "10em";  

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
let triangulo1 = document.getElementById('triangulo1');
let Menu1 = document.getElementById('Menu1');
let MenuThorfDivine = document.getElementById('MenuThorfDivine');
let triangulo2 = document.getElementById('triangulo2');
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
let MenuThorfDivine = document.getElementById('MenuThorfDivine');
let triangulo2 = document.getElementById('triangulo2');
let nav = document.getElementById('nav-list');
let opcaomat1 = document.getElementById('opcaomat1');
let opcaomat2 = document.getElementById('opcaomat2');
let opcaomat3 = document.getElementById('opcaomat3');

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
function cs2() {
let headerMenu = document.getElementById('headerMenu');
let triangulo1 = document.getElementById('triangulo1');
let Menu1 = document.getElementById('Menu1');
let MenuThorfDivine = document.getElementById('MenuThorfDivine');
let triangulo2 = document.getElementById('triangulo2');
let nav = document.getElementById('nav-list');
let opcaomat1 = document.getElementById('opcaomat1');
let opcaomat2 = document.getElementById('opcaomat2');
let opcaomat3 = document.getElementById('opcaomat3');

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
let MenuThorfDivine = document.getElementById('MenuThorfDivine');
let triangulo2 = document.getElementById('triangulo2');
let nav = document.getElementById('nav-list');
let opcaomat1 = document.getElementById('opcaomat1');
let opcaomat2 = document.getElementById('opcaomat2');
let opcaomat3 = document.getElementById('opcaomat3');

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
    let MenuThorfDivine = document.getElementById('MenuThorfDivine');
    let triangulo2 = document.getElementById('triangulo2');
    let nav = document.getElementById('nav-list');

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
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let MenuThorfDivine = document.getElementById('MenuThorfDivine');
    let triangulo2 = document.getElementById('triangulo2');
    let nav = document.getElementById('nav-list');

    headerMenu.style.transition = "0.5s";
    headerMenu.style.padding = "0 0 0 25%";
    Menu1.style.width = "24em";
    nav.style.margin = "0 0 0 31.1%"
    nav.style.width = "24em"
    
}


function ThorfDivineClose(){
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let MenuThorfDivine = document.getElementById('MenuThorfDivine');
    let triangulo2 = document.getElementById('triangulo2');
    let nav = document.getElementById('nav-list');

    headerMenu.style.transition = "0.5s";
    headerMenu.style.padding = "0 0 0 27%";
    Menu1.style.width = "20em";
    nav.style.margin = "0 0 0 33.1%"
    nav.style.width = "20em"

}
//function trocar(){
    //timerId1 = setInterval(function(){trocarDireita()}, 3200);
   // if(trocador==-2){trocador++}
//}
function trocarDireita(){
    let car1 = document.getElementById('car1');
    let car2 = document.getElementById('car2');
    let car3 = document.getElementById('car3');
    let car4 = document.getElementById('car4');
    let bol1 = document.getElementById('bolinha1'); 
    let bol2 = document.getElementById('bolinha2'); 
    let bol3 = document.getElementById('bolinha3'); 
    let bol4 = document.getElementById('bolinha4'); 
   // let timerId2;
    trocador ++; 
    //clearInterval(timerId1)
    //if (timerId2 != null) {
    //    clearTimeout(timerId2)
   // }
    //timerId2 = setTimeout(()=> trocarDireita(),  3200)
    //console.log(trocador)

    car1.style.float = "left";
    car2.style.float = "left";
    car3.style.float = "left";
    car4.style.float = "left";
      
    if (trocador == 0) {
        bol1.style.backgroundColor = "rgba(255, 255, 255, 1)"
        bol2.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol3.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol4.style.backgroundColor = "rgba(240, 255, 240, 0.418)"

        car1.style.float = "right";
        car1.style.width = "100%";
        car2.style.width = "0";
        car3.style.width = "0";
        car4.style.width = "0";
    }
    if (trocador == 1) {
        bol1.style.backgroundColor = "rgba(255, 255, 255, 0.418)"
        bol2.style.backgroundColor = "rgba(240, 255, 240, 1)"
        bol3.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol4.style.backgroundColor = "rgba(240, 255, 240, 0.418)"

        car1.style.width = "0";
        car2.style.width = "100%";
        car3.style.width = "0";
        car4.style.width = "0";
    }
    if (trocador == 2) {
        bol1.style.backgroundColor = "rgba(255, 255, 255, 0.418)"
        bol2.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol3.style.backgroundColor = "rgba(240, 255, 240, 1)"
        bol4.style.backgroundColor = "rgba(240, 255, 240, 0.418)"

        car1.style.width = "0";
        car2.style.width = "0";
        car3.style.width = "100%";
        car4.style.width = "0";
    }
    if (trocador == 3) {
        bol1.style.backgroundColor = "rgba(255, 255, 255, 0.418)"
        bol2.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol3.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol4.style.backgroundColor = "rgba(240, 255, 240, 1)"
        
        car1.style.width = "0";
        car2.style.width = "0";
        car3.style.width = "0";
        car4.style.width = "100%";
    }
    if (trocador >=4) {
        trocador= -1;
        trocarDireita();
    }
}
function trocarEsquerda(){
    trocador--;
    let car1 = document.getElementById('car1');
    let car2 = document.getElementById('car2');
    let car3 = document.getElementById('car3');
    let car4 = document.getElementById('car4');  
    let bol1 = document.getElementById('bolinha1'); 
    let bol2 = document.getElementById('bolinha2'); 
    let bol3 = document.getElementById('bolinha3'); 
    let bol4 = document.getElementById('bolinha4'); 
    car1.style.float = "right";
    car2.style.float = "right";
    car3.style.float = "right";
    car4.style.float = "right";
    
    if (trocador < 0) {
        trocador = 3;
    }
    if (trocador == 0) {
        bol1.style.backgroundColor = "rgba(255, 255, 255, 1)"
        bol2.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol3.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol4.style.backgroundColor = "rgba(240, 255, 240, 0.418)"

        car1.style.float = "left";
        car1.style.width = "100%";
        car2.style.width = "0";
        car3.style.width = "0";
        car4.style.width = "0";
    }
    if (trocador == 1) {
        bol1.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol2.style.backgroundColor = "rgba(255, 255, 255, 1)"
        bol3.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol4.style.backgroundColor = "rgba(240, 255, 240, 0.418)"

        car2.style.float = "left";
        car1.style.width = "0";
        car2.style.width = "100%";
        car3.style.width = "0";
        car4.style.width = "0";
    }
    if (trocador == 2) {
        bol1.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol2.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol3.style.backgroundColor = "rgba(255, 255, 255, 1)"
        bol4.style.backgroundColor = "rgba(240, 255, 240, 0.418)"

        car3.style.float = "left";
        car1.style.width = "0";
        car2.style.width = "0";
        car3.style.width = "100%";
        car4.style.width = "0";
    }
    if (trocador == 3) {
        bol1.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol2.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol3.style.backgroundColor = "rgba(240, 255, 240, 0.418)"
        bol4.style.backgroundColor = "rgba(255, 255, 255, 1)"

        car4.style.float = "left";
        car1.style.width = "0";
        car2.style.width = "0";
        car3.style.width = "0";
        car4.style.width = "100%";
    }
    
}
function mudar1() {
    trocador = -1
    trocarDireita();
}
function mudar2() {
    trocador = 0
    trocarDireita();
}
function mudar3() {
    trocador = 1
    trocarDireita();
}
function mudar4() {
    trocador = 2
    trocarDireita();
}
