function calcular() {
    let VP = document.getElementById("VP").value;
    let V = document.getElementById("V").value;
    let out = document.getElementById("out");

    let MA = 1.2*VP;
    console.log(MA);

    if(V<=VP){
        out.textContent = "Sem multa";
        out.style.color = "green";
    }
    else if(V <= MA  && V > VP){
        out.textContent = "multa leve";
        out.style.color = "yellow";
    }else{
        out.textContent = "multa grave";
        out.style.color = "red";
    }
}