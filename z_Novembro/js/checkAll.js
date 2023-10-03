
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

var bttn
    bttn = document.querySelector('#btn')

var cnpj
    cnpj = document.querySelector('#div_Cnpj')
var cpf
    cpf = document.querySelector('#div_Cpf')

var IsFull

let strongPass
    strongPass = false
let requires
    requires = 0

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
    
    let pass
        pass = document.querySelector('#pass')
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
                                
                                if (element.type != 'password') {
                                    element.classList.add('Acept')
                                        // console.log(`Alterado! - Classes:  ${element.classList}`);
                                }

                                    if (!strongPass && element.type == 'password') {
                                            element.classList.remove('Acept')
                                    }else{
                                        pass.placeholder = '**********'
                                            if (!element.classList.contains('Acept')) {
                                                element.classList.add('Acept')
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
                if (strongPass) {
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

    })


        bttn.addEventListener('click', ()=>{

            if (bttn.type == "button") {
                alert('Incira seus dados!')
                checkFromBttn()
            }

            if (IsFull == 8) {
                if (strongPass) {
                    console.log('Ta cheio! -> '+IsFull)
                    bttn.type = 'submit'
                }
            }
        })

// ==================================== Check radio option: ====================================

            for (let index = 0; index < radio.length; index++) {
                const element = radio[index]
                    // console.log(element)
    
                element.addEventListener('click',()=>{
                    if(element.id == 'trabalhador'){
                        cpf.style.display = 'block'
                        cnpj.style.display = 'none'
                        
                        form.action = '../php/cadastroTrabalhador.php'

                        birthDiv.style.display = 'block'
                        logoDiv.style.display = 'none'
                    }else{
                        cpf.style.display = 'none'
                        cnpj.style.display = 'block'
                        
                        form.action = '../php/cadastroEmpresa.php'
                        
                        birthDiv.style.display = 'none'
                        logoDiv.style.display = 'block'
                    }
                })
        }
