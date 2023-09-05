function calcular(){
    let nome = document.getElementById("nome");
    let m = document.getElementById("m").checked;
    let f = document.getElementById("f").checked; 
    let a = Number(document.getElementById("a").value);
    let r = document.getElementById("saida")

    if(nome.value ==""||(m==false && f==false)){
        alert("por favor, informe o nome e selecione o sexo");
        nome.focus();
        return;
    }
    
    else if (a == 0 || isNaN(a)) {
        alert("Por favor, insira sua altura corretamente");
        document.getElementById("a").focus();
        return;
    }
    
    if(m){
        var peso = 22 * Math.pow(a,2);
    }else{
        var peso = 21 * Math.pow(a,2);
    }

    saida.innerHTML+= nome.value +" seu peso ideal é: "+peso.toFixed(2)+"kg";

}
function limpar(){
    let nome = document.getElementById("nome").value = "";
    let m = document.getElementById("m").checked = false;
    let f = document.getElementById("f").checked = false; 
    let a = document.getElementById("a").value = "";
    let r = document.getElementById("saida").textContent = "";
}