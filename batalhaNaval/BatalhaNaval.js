function openPage() {
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let MenuThorfDivine = document.getElementById('MenuThorfDivine');
    let triangulo2 = document.getElementById('triangulo2');
    let triangulo3 = document.getElementById('triangulo3');
    let nav = document.getElementById('nav-list');
    let matris = {
        a:[ document.getElementById('a1'), document.getElementById('a2'),document.getElementById('a3')],
        b:[ document.getElementById('b1'), document.getElementById('b2'),document.getElementById('b3')],
        c:[ document.getElementById('c1'), document.getElementById('c2'),document.getElementById('c3')],
    }

    headerMenu.style.transition = "0.5s";
    headerMenu.style.padding = "0 0 0 27%";
    Menu1.style.width = "20em"
    

    if(Menu1.style.width == "20em" ){
        setTimeout(function (params) {
            triangulo1.style.display = "block";
            triangulo2.style.display = "block";
            triangulo3.style.display = "block";
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

