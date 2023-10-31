let bairroCidade
    bairroCidade = document.querySelector('#bairroCidade')

var querry
    querry = document.querySelectorAll('input')


const form = document.querySelector('.formCadastro')
let radio
    radio = document.querySelectorAll('.inptRadio')

let identityLbl
    identityLbl = document.querySelector('#identityLbl')

let birthDiv
    birthDiv = document.querySelector('#birthDiv')
let logoDiv
    logoDiv = document.querySelector('#logoDiv')

let pass
    pass = document.querySelector('#pass')
    
var bttn
    bttn = document.querySelector('#btn')

var cnpjDiv
    cnpjDiv = document.querySelector('#div_Cnpj')
var cnpjInp
    cnpjInp = document.querySelector('#cnpj')
var cnpjDsply
    cnpjDsply = true
var cnpjValido
    cnpjValido = false

var cpf
    cpf = document.querySelector('#div_Cpf')
var cpfInp
    cpfInp = document.querySelector('#cpf')
var cpfDsply
    cpfDsply = false
var cpfValido
    cpfValido = false

var IsFull

let strongPass
    strongPass = false
let cepCheck
    cepCheck = false
let requires
    requires = 0



    function validaCPF(cpfStr) {

            // console.log(`Antes: ${cpfStr}`);
        cpfStr = cpfStr.replace(/[^\d]+/g,'');
            // console.log(`Depois: ${cpfStr}`);

        if (cpfStr.length != 11 ||
            cpfStr == "00000000000" ||
            cpfStr == "11111111111" ||
            cpfStr == "22222222222" ||
            cpfStr == "33333333333" ||
            cpfStr == "44444444444" ||
            cpfStr == "55555555555" ||
            cpfStr == "66666666666" ||
            cpfStr == "77777777777" ||
            cpfStr == "88888888888" ||
            cpfStr == "99999999999"){
                return false;
            }

            let Soma;
                Soma = 0;
            let Resto;

                for (i=1; i<=9; i++){ 
                    Soma = Soma + parseInt(cpfStr.substring(i-1, i)) * (11 - i)
                }     Resto = (Soma * 10) % 11;

              if ((Resto == 10) || (Resto == 11)){
                    Resto = 0
                }

              if (Resto != parseInt(cpfStr.substring(9, 10))){
                return false
            }
                Soma = 0;

                for (i = 1; i <= 10; i++){
                    Soma = Soma + parseInt(cpfStr.substring(i-1, i)) * (12 - i)
                }     Resto = (Soma * 10) % 11;
          
            if ((Resto == 10) || (Resto == 11)){
                Resto = 0
            }
                  if (Resto != parseInt(cpfStr.substring(10, 11))){
                    return false
                }

                cpfInp.classList.add('Acept')

     return true;
        
    }


    function validaCnpj(cnpjStr) {
 
            // console.log(`Antes: ${cpfStr}`);
        cnpjStr = cnpjStr.replace(/[^\d]+/g,'');
            // console.log(`Depois: ${cpfStr}`);
     
        if(cnpjStr == ''){
            return false
        }
         
        if (cnpjStr.length != 14){
            return false;
        }
     
        // Elimina CNPJs invalidos conhecidos
        if (cnpjStr == "00000000000000" || 
            cnpjStr == "11111111111111" || 
            cnpjStr == "22222222222222" || 
            cnpjStr == "33333333333333" || 
            cnpjStr == "44444444444444" || 
            cnpjStr == "55555555555555" || 
            cnpjStr == "66666666666666" || 
            cnpjStr == "77777777777777" || 
            cnpjStr == "88888888888888" || 
            cnpjStr == "99999999999999"){
            return false;
        }
             
        // Valida DVs
        tamanho = cnpjStr.length - 2
        numeros = cnpjStr.substring(0,tamanho);
        digitos = cnpjStr.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
          soma += numeros.charAt(tamanho - i) * pos--;
          if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0))
            return false;
             
        tamanho = tamanho + 1;
        numeros = cnpjStr.substring(0,tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
          soma += numeros.charAt(tamanho - i) * pos--;
          if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
              return false;
               
            cnpjInp.classList.add('Acept')

        return true;
        
    }

    function cep_verify(cep) {

        if (cep == '') {
            cepCheck = false
            return;
        }

        fetch(`https://viacep.com.br/ws/${cep}/json/`,{
                method: 'get'
            })
            .then((response)=>{
            response.json().then((result)=>{

                if (!result.erro) {

                    bairroCidade.value = result.localidade     // cidade
                    bairroCidade.value += ' _ '+result.bairro // bairro
                    bairroCidade.value += ' _ '+result.uf    // estado

                    console.log(bairroCidade.value);
                    
                    cepCheck = true
                    console.log("Check: "+cepCheck);
                    console.log('==================');

                }else{
                    alert('Cep inválido! \nCódigo do erro: 400 Bad Request')
                }
            })
            .catch((error)=>{
                if (error) {
                    alert(`Erro: ${error.message}`)

                    if (cidade.value != '') {
                        for (let i = 0; i < Fantasmas.length; i++) {
                            const element = Fantasmas[i];
                            
                                element.value = ''
                        }
                    }

                    cepCheck = false
                }
            })
        })
        
    }

        function checkFromBttn(IsFull) {
            
            IsFull = 0

            for (let index = 0; index < querry.length; index++) {
                const element = querry[index];
                    // console.log(element);
            
                    if (element.type != 'button') {
                        if (element.value != '') {
                                if (element.classList.contains('Denai')) {
                                    element.classList.remove('Denai')
                                }
                        } else{
                            if (!strongPass) {
                                pass.placeholder = 'Senha Fraca! - Veja o (?)'
                                alert('Senha Fraca!')
                                return
                            }
                            element.classList.add('Denai')
                        }
                    }
            
                }
            
            return IsFull;
        }


// ==================================== Check Pass strenth: ====================================
function checkPass(){
    
    let p1
        p1 = document.getElementById('p1')
    let p2
        p2 = document.getElementById('p2')
    let p3
        p3 = document.getElementById('p3')
    let p4
        p4 = document.getElementById('p4')
    
    var p1v = false
    var p2v = false
    var p3v = false
    var p4v = false
    
    const mais = /[A-Z]/
    const nums = /[0-9]/
    const espc = /[@|?|-|#|!|$|%|¨|*|(|)|+|§|°|:|;|>|<|'|"|_|+|.|,|~]/
    
    if (pass.value != '') {
        if (mais.test(pass.value)) {
            p1v = true
            p1.style = 'color: rgba(96, 255, 96, 0.829)'
        }else{
            p1v = false
            p1.style = 'color: pink'
            }
                    if (nums.test(pass.value)) {
                        p3v = true
                        p3.style = 'color: rgba(96, 255, 96, 0.829)'
                    }else{
                        p3v = false
                        p3.style = 'color: pink'
                    }
                    if (espc.test(pass.value)) {
                        p4v = true
                        p4.style = 'color: rgba(96, 255, 96, 0.829)'
                    }else{
                        p4v = false
                        p4.style = 'color: pink'
                    }
                    if(pass.value.length >= 8){
                        p2v = true
                        p2.style = 'color: rgba(96, 255, 96, 0.829)'
                    }else{
                        p2v = false
                        p2.style = 'color: pink'
                    }
                    
                    if((p1v && p2v && p3v && p4v) == false){
                        verificar = true
                        strongPass = false
                        // console.log(verificar+' '+strongPass);
                    }else{
                        verificar = false
                        strongPass = true
                        // console.log(verificar+' '+strongPass);
                    }
    }else{
        strongPass = false
    }
}

// ==================================== END: ====================================
    
            
    window.addEventListener('keyup', (e)=>{

        
    IsFull = 0

    // console.log(querry[0].value);


        for (let index = 0; index < querry.length; index++) {
            const element = querry[index];
            
                    if (element.type != 'button' && element.type != 'radio') {
                        if (element.value != '') {

                                if (IsFull != 8 && IsFull < 8) {
                                    IsFull++
                                }

                                if (element.classList.contains('Denai')) {
                                    element.classList.remove('Denai')
                                }
                                
                                    if (element.id == 'cpf') {
                                        if (cpfValido) {
                                            element.classList.add('Acept')
                                        }else{
                                            element.classList.remove('Acept')
                                        }
                                    }
                                    if (element.id == 'cnpj') {
                                        if (cnpjValido) {
                                            element.classList.add('Acept')
                                        }else{
                                            element.classList.remove('Acept')
                                        }
                                    }

                                if (element.type != 'password' && element.id != cpfInp.id && element.id != cnpjInp.id) {
                                    element.classList.add('Acept')
                                        console.log(`Alterado! - Classes:  ${element.classList}`);
                                }

                                    if (!strongPass && element.type == 'password') {
                                            element.classList.remove('Acept')
                                    }else{
                                        pass.placeholder = '**********'
                                            if (element.id != cpfInp.id && element.id != cnpjInp.id) {
                                                if (!element.classList.contains('Acept')) {
                                                    element.classList.add('Acept')
                                                }
                                            }
                                        
                                    }

                            if (element.id == 'cep' && element.value != ''  && !cepCheck) {

                                if (((element.value.toString()).length == 8 || (element.value.toString()).length == 9)) {
                
                                    let cep 
                                        cep = (element.value.toString()).replace('-', '')
                                            cep = (element.value.toString()).replace('.', '')
                                    
                                            cep_verify(cep)
                                            console.log(cepCheck);
                                    
                                }else{
                                    console.log(cepCheck);
                                    if ((element.value.toString()).length >= 9) {
                                        console.log('hllo');
                                        element.value.replace('-','')
                                        if ((element.value.toString()).length >= 9) {
                                        console.log('hllo 2');
                                            element.value = ''
                                            cepCheck = false
                                            console.clear()
                                        }
                                    }else if((element.value.toString()).length < 8){
                                        cepCheck = false
                                        console.clear()
                                    }
                                }
                
                            }

                        } else if(e.key == 'Enter'){

                            if (!strongPass) {
                                pass.placeholder = 'Senha Fraca! - Veja o (?)'
                            }else{
                                pass.placeholder = '**********'
                                
                            }

                            element.classList.add('Denai')
                        }else if (IsFull == 8 && element.value == '' && element.type != 'button' && element.type != 'radio') {
                            IsFull = 7
                        }else{
                            if (element.classList.contains('Acept')) {
                                element.classList.remove('Acept')
                            }
                        }
                    }
            
                }

                // console.log(IsFull)
                    if (e.key == 'Backspace') {
                        e.target.value = ''
                        IsFull = IsFull - 1 
                    }
                
                if (pass.focus) {
                    checkPass()
                }

            if (IsFull == 8) {
                if (strongPass && cepCheck) {
                    if (bttn.classList.contains('btnBlocked')) {
                        bttn.classList.remove('btnBlocked')
                    }
                        bttn.value = 'Entrar'
                        bttn.type = 'submit'
                }else{
                        pass.placeholder = 'Senha Fraca! - Veja o (?)'
                }
            }else{

                if (!bttn.classList.contains('btnBlocked')) {
                    bttn.classList.add('btnBlocked')
                }
                    bttn.value = '...'
                    bttn.type = 'button'
            }

// ===================================== Chek about CPF value ==================================

            if (cpfDsply) {
                // console.log(cpfInp.value);
                if (cpfInp.value != '' && (cpfInp.value.length == 11 || cpfInp.value.length == 12)) {
                    console.log("i'm in!");
                    var cpfStr = cpfInp.value.toString()
                        setTimeout(() => {
                            if (cpfValido == false && (cpfStr.length == 11 || cpfStr.length == 12)) {
                                if (validaCPF(cpfStr)) {
                                    cpfValido = true
                                    alert('Cpf Válido!')
                                }else{
                                    cpfValido = false
                                    alert('Cpf Inválido!')
                                }
                            }
                        }, 1000);
                }else if(cpfInp.value.length > 12){
                    cpfInp.value = ''
                }
            }else if(cnpjDsply){
                // console.log(cnpjInp.value);
                if (cnpjInp.value != '' && (cnpjInp.value.length == 14 || cnpjInp.value.length == 16)) {
                    console.log("i'm in!");
                    var cnpjStr = cnpjInp.value.toString()
                        setTimeout(() => {
                            if (cnpjValido == false && (cnpjStr.length == 14 || cnpjStr.length == 16)) {
                                if (validaCnpj(cnpjStr)) {
                                    cnpjValido = true
                                    alert('Cnpj Válido!')
                                }else{
                                    cnpjValido = false
                                    alert('Cnpj Inválido!')
                                }
                            }
                        }, 1000);
                }else if(cnpjInp.value.length > 16){
                    cnpjInp.value = ''
                }
            }

    })


        bttn.addEventListener('click', ()=>{

            if (bttn.type == "button") {
                alert('Insira seus dados!')
                checkFromBttn()
            }

            if (IsFull == 8) {
                if (strongPass) {
                    // console.log('Ta cheio! -> '+IsFull)
                    bttn.type = 'submit'
                }else{
                    alert('Senha fraca! Verifique o (?) para mais informações')
                }
            }
        })

// ==================================== Check radio option: ====================================

            for (let index = 0; index < radio.length; index++) {
                const element = radio[index]
                    // console.log(element)
    
                element.addEventListener('click',()=>{

                    cpfInp.value = ''
                    cnpjInp.value = ''

                    if(element.id == 'trabalhador'){
                        identityLbl.innerHTML = 'Nome Completo'

                        cpf.style.display = 'block'
                            cpfDsply = true

                                cpfValido = false
                                cnpjValido = false

                            cnpjDsply = false
                        cnpjDiv.style.display = 'none'
                        cnpjInp.classList.remove("Acept")

                        birthDiv.style.display = 'block'
                        logoDiv.style.display = 'none'
                    }else{
                        identityLbl.innerHTML = 'Nome da Empresa: '

                        cpf.style.display = 'none'
                            cpfDsply = false

                                cpfValido = false
                                cnpjValido = false

                            cnpjDsply = false
                        cnpjDiv.style.display = 'block'
                        cpfInp.classList.remove("Acept")
                        
                        birthDiv.style.display = 'none'
                        logoDiv.style.display = 'block'
                    }

                    checkFromBttn()

                })

            }
