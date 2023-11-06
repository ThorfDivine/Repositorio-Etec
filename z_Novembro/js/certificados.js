function testarChange(){
    if(document.getElementById("certificado").length < 1){
        
        document.getElementById("enviarCertificado").type = "button";

    }
    else{

        document.getElementById("enviarCertificado").type = "submit";

    }
    
}