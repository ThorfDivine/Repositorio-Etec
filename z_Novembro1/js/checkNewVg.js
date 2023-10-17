    // Fantasmas

let bairro = document.querySelector('#bairro')
let cidade = document.querySelector('#cidade')
let estado = document.querySelector('#estado')
let rua = document.querySelector('#rua')
    let Fantasmas = [bairro, cidade, estado];

    // Inputs:
let inputs 
    inputs   = document.querySelectorAll('input')
let textarea
    textarea = document.querySelector('textarea')

    // Home Officie:
let where
    where    = document.querySelector('input[type="checkbox"]')
let whereL
    whereL   = document.querySelector('#whereLable')
let whereS
    whereS   = document.querySelector('#whereSpan')
    
    // Botões:
let limpar
    limpar   = document.querySelector('#clear')
let submit
    submit   = document.querySelector('#enviar')

    // Variavies de confirmação
let manyInps = 0
let cepCheck = false
let inpsFull = false
let habilidd = false



    window.addEventListener('keyup', (e)=>{
        for (let index = 0; index < inputs.length; index++) {
            const element = inputs[index];
            
                if (element.value != '') {
                    if (element.type != 'button' && element.type != 'submit' && element.type != 'button') {

                        for (let i = 0; i < Fantasmas.length; i++) {
                            const element2 = Fantasmas[i];
                            
                            if (element != element2) {
                                
                            }

                        }

                    }
                    if (element.id == 'cep') {
                        if (((element.value.toString()).length == 8 || (element.value.toString()).length == 9) && !cepCheck) {
        
                            let cep 
                                cep = (element.value.toString()).replace('-', '')
                                    cep = (element.value.toString()).replace('.', '')
                            
                                    cep_verify(cep)
                                    console.log(cepCheck);
                            
                        }else{
                            console.log(cepCheck);
                            if ((element.value.toString()).length >= 9) {
                                element.value.replace('-','')
                                if ((element.value.toString()).length >= 9) {
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
                }

        }
    })

    whereL.addEventListener('click', ()=>{



    })

    limpar.addEventListener('click', ()=>{

        for (let index = 0; index < inputs.length; index++) {
            const element = inputs[index];

            if (element.type != 'submit' && element.type != 'button') {
                element.value = ''
            }

            textarea.value = ''
            
        }
        
    })

    // ================= FUNCTIONS ===================

        function cep_verify(cep) {
            console.log(cep);

            fetch(`https://viacep.com.br/ws/${cep}/json/`,{
                    method: 'get'
                })
                .then((response)=>{
                response.json().then((result)=>{

                    if (!result.erro) {

                        cidade.value = result.localidade;
                        rua.value = result.logradouro;
                        bairro.value = result.bairro;
                        estado.value = result.uf;

                        for (let inde = 0; inde < Fantasmas.length; inde++) {
                            const element3 = Fantasmas[inde];

                            console.log(element3.id+": "+element3.value);
                            
                        }
                        
                        console.log('==================');
                        cepCheck = true

                    }else{
                        alert('Cep inválido! \nCódigo do erro: 400 Bad Request')
                    }
                })
                .catch((error)=>{
                    if (error) {
                        alert(`Erro: ${error.message}`)
                        cepCheck = false
                    }
                })
            })
        }


        // Para liberar o botão de envio = if(manyInps == inputs.length){ ... }