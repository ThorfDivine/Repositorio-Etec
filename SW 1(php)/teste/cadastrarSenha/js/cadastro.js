const senhaFato = document.getElementById('senhae');




senhaFato.onkeyup = () =>{

    let senha = document.getElementById('senhae').value;
    let senhaLength = senha.length;
    let senhaCaracter = senha.split("");
    let alfa = /[a-z]/;
    let alfam = /[A-Z]/;
    let num1 = /[0-9]/;
    let especiais = /[! | " | # | $ | % | & | ' | ( | )| * | + | , | - | . | / | : | ; | < | = | > | ? | @ | [ |  | \] | ^ | _ | ` | { | { | | } | ~ ]/;
    let d6a10 = document.getElementById('d6a10');
    let min = document.getElementById("min"); 
    let mai = document.getElementById("mai"); 
    let num = document.getElementById("num");
    let esp = document.getElementById("esp");
    let m = false; 
    let M = false;
    let n = false; 
    let e = false; 
    let qtd = false;

    if (alfa.test(senha)) {
        m = true
        min.style.color = "green";

    }else{
        m = false
        min.style.color = "red";

    }
    if (alfam.test(senha)) {
        M = true
        mai.style.color = "green";
    }else{
        M = false
        mai.style.color = "red";
    }
    if (num1.test(senha)) {
        n = true
        num.style.color = "green";
    }else{
        n = false
        num.style.color = "red";
    }
    if (especiais.test(senha)) {
        e = true
        esp.style.color = "green"
        
    }else{
        
        e = false
        esp.style.color = "red";
    }
    if (senha.length>= 8) {
        qtd = true
        d6a10.style.color = "green"
    }else{
        qtd = false
        d6a10.style.color = "red"
    }
    if (m && M && n && e && qtd) {
        document.getElementById("botao_cad").disabled = false;
        document.getElementById("rainbow2").style.backgroundColor = "green"
    }else{
        document.getElementById("botao_cad").disabled = true;
        document.getElementById("rainbow2").style.backgroundColor = "red"
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

