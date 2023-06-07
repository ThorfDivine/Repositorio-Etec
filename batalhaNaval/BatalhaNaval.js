function openPage() {
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let MenuThorfDivine = document.getElementById('MenuThorfDivine');
    let triangulo2 = document.getElementById('triangulo2');
    let triangulo3 = document.getElementById('triangulo3');
    let nav = document.getElementById('nav-list');
    let random = parseInt(Math.random() * (9 - 1) + 1);
    let bombas;
    console.log(random);
    let matris = {
        a:[ document.getElementById('a1'), document.getElementById('a2'),document.getElementById('a3')],
        b:[ document.getElementById('b1'), document.getElementById('b2'),document.getElementById('b3')],
        c:[ document.getElementById('c1'), document.getElementById('c2'),document.getElementById('c3')],
    }
    switch (randon) {
        case 1:
            bombas = "a1";
            break;
        case 2:
            bombas = "a2";
            break;    
        case 3:
            bombas = "a3";
            break;
        case 4:
            bombas = "a4";
            break;
        case 5:
            bombas = "a5";
            break;
        case 6:
            bombas = "a6";
            break;    
        case 7:
            bombas = "a7";
            break;
        case 8:
            bombas = "a8";
            break;
        case 9:
            bombas = "a9";
            break;
        default:
            break;
    }
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

//---------------------------jogo--------------------------------------------//

