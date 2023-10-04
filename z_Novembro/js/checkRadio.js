let radio       = document.querySelectorAll('input[type="radio"]')
let identity    = document.getElementById('identity')
let formulario  = document.querySelector('form')

    for (let index = 0; index < radio.length; index++) {
            const element = radio[index]
                // console.log(element)
    
            element.addEventListener('click',()=>{
                if(element.id == 'trabalhador'){
                    identity.placeholder = 'Seu CPF'
                }else{
                    identity.placeholder = 'Seu CNPJ'
                }
            })
        }