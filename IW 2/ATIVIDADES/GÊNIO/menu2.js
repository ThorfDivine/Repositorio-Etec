
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
function fugir(){
    let valor = document.getElementById("n1").value;
    let sim = document.getElementById("tnt");

    if (valor == null || valor == " "|| valor == "" || nFuga == 1) {
    if (fuga == null) {
        fuga = 1;
        console.log("chegou null");
    }
    else{
        fuga++;
        console.log("deu ++: "+fuga)
    }
    if (fuga == 1){
        sim.style.float = "left";
        console.log("a fuga era 1 agora foi pra esquerda e definida como 2 :"+ fuga);
        sim.style.margin = "0 10px 0 0px";
    }
    if(fuga ==2 ){
        sim.style.float = "right";
        console.log("a fuga era 1 agora é 2, e foi pra direita e definido como 0");
        sim.style.margin = "0 10px 0 400px";
    }
    if (fuga >=3) {
        console.log("fuga era maior de 2 e voltou a zero");
        fuga =0;
        fugir()
    }   }
   
}
function fugir2(){
    let dst = document.getElementById("dst");
    if (nFuga2 == 1) {
        if (fuga2 == null) {
            fuga2 = 1;
            console.log("chegou null");
        }
        else{
            fuga2++;
            console.log("deu ++: "+fuga2)
        }
        if (fuga2 == 1){
            dst.style.float = "left";
            console.log("a fuga2 era 1 agora foi pra esquerda e definida como 2 :"+ fuga2);
            dst.style.margin = "0 10px 0 0px";
        }
        if(fuga2 == 2 ){
            dst.style.float = "right";
            console.log("a fuga2 era 1 agora é 2, e foi pra direita e definido como 0");
            dst.style.margin = "0 10px 0 400px";
        }
        if (fuga2 >=3) {
            console.log("fuga2 era maior de 2 e voltou a zero");
            fuga2 =0;
            fugir2()
        }
    }
}
function ver() {
    let valor = document.getElementById("n1").value;
    let v = document.getElementById("n1");
    let img = document.getElementById("luffy");
    let tnt = document.getElementById("tnt");
    if (rand == null) {
        rand = randon
    }
    if(nFuga != 1){
    if (randon == valor) {
        luffy.src = "imgs/acertou.jpg"
        luffy.style.borderColor = "rgba(14, 175, 14, 0.904)";
        document.getElementById("title").innerHTML = "PARABENS! VENDCEDOR! ACERTOU!!! ";
        v.disabled = true; 
        nFuga = 1;
        nFuga2 = 1;
        fugir();
        console.log("nFuga2 = "+nFuga2)
    }else if(randon != valor){
        if (valor > randon) {
            alert("errou! seu número é maior que o escolhido")
        }if (valor < randon) {
            alert("errou! seu número é menor que o escolhido")
        }
        luffy.src = "imgs/errou.jpg"
        document.getElementById("title").innerHTML = "TENTE ADIVINHAR O NÚMERO! ";
        luffy.style.borderColor = "rgba(141, 20, 4, 0.904)";
        //nFuga = 0;
    }}
}
function desistir(){
    if (nFuga !=1) {
    
    let sim = document.getElementById("tnt");
    let title = document.getElementById("title");
    let img = document.getElementById("luffy")
    document.getElementById("n1").disabled = true;
    title.innerHTML = "Fraco! Desistiu! aperte F5 para tentar novamente";
    sim.style.display = "none";
    img.style.borderColor = "black";
    img.src = "imgs/desistiu.jpg"
    }
}
    

