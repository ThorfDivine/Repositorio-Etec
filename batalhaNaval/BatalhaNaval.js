function openPage() {
    let headerMenu = document.getElementById('headerMenu');
    let triangulo1 = document.getElementById('triangulo1');
    let Menu1 = document.getElementById('Menu1');
    let MenuThorfDivine = document.getElementById('MenuThorfDivine');
    let triangulo2 = document.getElementById('triangulo2');
    let rand = parseInt(Math.random() * 8); 
    let nav = document.getElementById('nav-list');

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

function mudarpimg1(){
    if (rand==1) {
    document.getElementById('result').innerHTML=" VOCÊ PERDEU!"
    document.getElementById('a1').innerHTML = " <img src='imgs/boom.png' alt='Figura' style='width: 20rem; height: 20rem;'>"   
    }
    else{
    document.getElementById('a1').innerHTML = " <img src='imgs/X.png' alt='Figura' style='width: 20rem; height: 20rem;'>"}
}
function mudarpimg2(){
    if (rand==2){
        document.getElementById('result').innerHTML=" VOCÊ PERDEU!"
        document.getElementById('a2').innerHTML = " <img src='imgs/boom.png' alt='Figura' style='width: 20rem; height: 20rem;'>"   
        }
        else{
        document.getElementById('a2').innerHTML = " <img src='imgs/X.png' alt='Figura' style='width: 20rem; height: 20rem;'>"}
}3
function mudarpimg3(){
    if (rand==3) {
        document.getElementById('result').innerHTML=" VOCÊ PERDEU!"
        document.getElementById('a3').innerHTML = " <img src='imgs/boom.png' alt='Figura' style='width: 20rem; height: 20rem;'>"   
        }
        else{
        document.getElementById('a3').innerHTML = " <img src='imgs/X.png' alt='Figura' style='width: 20rem; height: 20rem;'>"}
}
function mudarpimg4(){
    if (rand==4) {
        document.getElementById('result').innerHTML=" VOCÊ PERDEU!"
        document.getElementById('b1').innerHTML = " <img src='imgs/boom.png' alt='Figura' style='width: 20rem; height: 20rem;'>"   
        }
        else{
        document.getElementById('b1').innerHTML = " <img src='imgs/X.png' alt='Figura' style='width: 20rem; height: 20rem;'>"}
}
function mudarpimg5(){
    if (rand==5) {
        document.getElementById('result').innerHTML=" VOCÊ PERDEU!"
        document.getElementById('b2').innerHTML = " <img src='imgs/boom.png' alt='Figura' style='width: 20rem; height: 20rem;'>"   
        }
        else{
        document.getElementById('b2').innerHTML = " <img src='imgs/X.png' alt='Figura' style='width: 20rem; height: 20rem;'>"}
}
function mudarpimg6(){
    if (rand==6) {
        document.getElementById('result').innerHTML=" VOCÊ PERDEU!"
        document.getElementById('b3').innerHTML = " <img src='imgs/boom.png' alt='Figura' style='width: 20rem; height: 20rem;'>"   
        }
        else{
        document.getElementById('b3').innerHTML = " <img src='imgs/X.png' alt='Figura' style='width: 20rem; height: 20rem;'>"}
}
function mudarpimg7(){
    if (rand==7) {
        document.getElementById('result').innerHTML=" VOCÊ PERDEU!"
        document.getElementById('c1').innerHTML = " <img src='imgs/boom.png' alt='Figura' style='width: 20rem; height: 20rem;'>"   
        }
        else{
        document.getElementById('c1').innerHTML = " <img src='imgs/X.png' alt='Figura' style='width: 20rem; height: 20rem;'>"}
}
function mudarpimg8(){
    if (rand==8) {
        document.getElementById('result').innerHTML=" VOCÊ PERDEU!"
        document.getElementById('c2').innerHTML = " <img src='imgs/boom.png' alt='Figura' style='width: 20rem; height: 20rem;'>"   
        }
        else{
        document.getElementById('c2').innerHTML = " <img src='imgs/X.png' alt='Figura' style='width: 20rem; height: 20rem;'>"}
}
function mudarpimg9(){
    if (rand==9) {
        document.getElementById('result').innerHTML=" VOCÊ PERDEU!"
        document.getElementById('c3').innerHTML = " <img src='imgs/boom.png' alt='Figura' style='width: 20rem; height: 20rem;'>"   
        }
        else{
        document.getElementById('c3').innerHTML = " <img src='imgs/X.png' alt='Figura' style='width: 20rem; height: 20rem;'>"}
}