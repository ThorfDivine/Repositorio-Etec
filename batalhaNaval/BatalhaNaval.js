function openPage() {
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let MenuThorfDivine = document.getElementById('MenuThorfDivine');
    let triangulo2 = document.getElementById('triangulo2');
    let rand = parseInt(Math.random() * 8); 
    let nav = document.getElementById('nav-list');
    
    let matris = {
        a:[ document.getElementById('a1'), document.getElementById('a2'),document.getElementById('a3')],
        b:[ document.getElementById('b1'), document.getElementById('b2'),document.getElementById('b3')],
        c:[ document.getElementById('c1'), document.getElementById('c2'),document.getElementById('c3')],
    }
    switch (rand) {
        case 0:
            console.log("a1");
            break;
        case 1:
            console.log("a2");
            break;
        case 2: 
            console.log("a3");
            break;
        case 3:
            console.log("b1");
            break;
        case 4:
            console.log("b2");
            break;
        case 5:
            console.log("b3");
            break;
        case 6:
            console.log("c1");
            break;
        case 7:
            console.log("c2");
            break;
        case 8:
            console.log("c3");
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

