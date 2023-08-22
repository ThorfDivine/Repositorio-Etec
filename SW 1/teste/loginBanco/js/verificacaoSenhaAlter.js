const senhaFato = document.getElementById('senhae');




senhaFato.onkeyup = (event) =>{

    let evt = event 
    let senha = document.getElementById('senhae').value;
    let senhaLength = senha.length;
    let senhaCaracter = senha.split("");
    let alfa = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    let especiais = ['!', '\"', '#', '$', '%', '&', '\'', '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', '\\', ']', '^', '_', '`', '{', '|', '}', '~'];

    let d6a10 = document.getElementById('d6a10');
    let min = document.getElementById("min"); 
    let mai = document.getElementById("mai"); 
    let num = document.getElementById("num");
    let esp = document.getElementById("esp");

    console.log(evt.key);
 //---------------------------se tem + de 6
    if (senhaLength < 6) {
        d6a10.style.color = "red";
    }else if (senhaLength >= 6) {
        d6a10.style.color = "green";
    }
 //---------------------------se tem maiuscula e minuscula

    for (let index = 0; index < 33; index++) {
        if (index < 26) {
            if (senhaCaracter[senhaLength - 1]+"" == alfa[index].toLowerCase() ) {
                console.log("cheguei no min era pra ta verde");
                min.style.color = "green";
            }
            if (senhaCaracter[senhaLength - 1]+"" == alfa[index].toUpperCase() ) {
                console.log("cheguei no mai era pra ta verde");
                mai.style.color = "green";
            } }
        if(senhaCaracter[senhaLength - 1] == index+""){
            num.style.color = "green";
        }
        if (senhaCaracter[senhaLength - 1] == especiais[index]) {
            esp.style.color = "green";
        }
    }
    if (evt.key == "Backspace" || evt.key == "Delete") {
        mai.style.color = "red";
        min.style.color = "red";
        num.style.color = "red";
        esp.style.color = "red";
        for (let index2 = 0; index2 < senhaLength; index2++) {
            for (let index3 = 0; index3 < 33; index3++) {
                if (index3 < 26) {
                    if (senhaCaracter[index2 - 1]+"" == alfa[index3].toLowerCase() ) {
                        console.log("cheguei no min era pra ta verde");
                        min.style.color = "green";
                    }
                    if (senhaCaracter[index2 - 1]+"" == alfa[index3].toUpperCase() ) {
                        console.log("cheguei no mai era pra ta verde");
                        mai.style.color = "green";
                    } }
                if(senhaCaracter[index2 - 1] == index3+""){
                    num.style.color = "green";
                }
                if (senhaCaracter[index2 - 1] === especiais[index3]) {
                    esp.style.color = "green";
                }
            }         
        }
    }
    
}

function abrindo(){
    let inputS1 = document.getElementById('senhae');

    let eye1 = document.getElementById('zoro');

    inputS1.type = 'text';

    eye1.src = '../IMG/zoio zoro.jpg';

    eye1.setAttribute('onclick','fechando()');

}

function fechando(){

        let inputS1;

            inputS1 = document.getElementById('senhae');

        let eye1;

            eye1 = document.getElementById('zoro');

        inputS1.type = 'password';

        eye1.src = '../IMG/zoio_zoro_close.jpg';

        eye1.setAttribute('onclick','abrindo()');
}

