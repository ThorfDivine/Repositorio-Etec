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
    
    // Botões:
let limpar
    limpar   = document.querySelector('#clear')
let submit
    submit   = document.querySelector('#enviar')
let submitA
    submitA  = document.querySelector('#enviarA')
let submitB  
    submitB  = document.querySelector('#enviarB')

    // Variavies de confirmação
let manyInps = 0
    let whoInps = []
let cepCheck = false
let inpsFull = false
let habilidd = false


    
    window.addEventListener('keyup', ()=>{

        // console.log(e.key);

        for (let index = 0; index < inputs.length; index++) {
            const element = inputs[index];
            
                if (element.value != '') {
                    if (element.value != '' && element.type != 'button' && element.type != 'submit' && element.type != 'select' && element.type != 'checkbox' && element.id != 'cep') {
                            manyInps = 0    
                            checar()
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
                }

        }
    })

    whereL.addEventListener('click', (e)=>{

        // Para checkbox checked == true (significa que está desmarcada) _ checked == false (significa que está marcada)

        let spanIni = '<span class="material-symbols-outlined" id="whereSpan" style="font-size: 1.2rem;">'
        let spanFim = '</span>'

        if (where.checked == false) {

            let spanTxt = 'factory'
            let span = spanIni+spanTxt+spanFim
            e.target.innerHTML = `Formato: Presencial ${span}`

        }else{

            let spanTxt = 'home'
            let span = spanIni+spanTxt+spanFim
            e.target.innerHTML = `Formato: Home Office ${span}`

        }

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

            if (cep == '') {
            }

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

    function checar() {

        for (let index = 0; index < inputs.length; index++) {
            const element = inputs[index];

            let element_Father = element.parentElement.parentElement
            
            if (element.value != '' && element.type != 'button' && element.type != submit && element.type != 'checkbox' && element.type != 'date' && (element_Father.style.display != 'none')) {
                
                manyInps++
                // console.log(`Elemento: ${element.id} \nValor: ${element.value}`);

            }
            if (element.type != 'checkox' && element.type != 'date' && (element_Father.style.display != 'none')) {
                if(element.value == ''){
                    manyInps = 0
                    if (element.id == 'cep' && (element.value.toString).length < 8) {
                        manyInps = 0
                        if (cepCheck) {
                            cepCheck = false
                        }
                    }
                    botao()
                }
            }

            if (manyInps == 5) {
                manyInps = 4
            }

        }
        console.log(manyInps);
        botao()
    }

    function botao() {
        if ((manyInps == 4) && cepCheck) {
            
            submit.value = 'Anunciar'
            submit.classList.remove('btnBlocked')
            
            submit.type = 'submit'

            document.getElementById('enviar').setAttribute('onclick', 'proximo()')
            
        }else if (manyInps < 4 || !cepCheck) {
            
            submit.value = '...'
            submit.classList.add('btnBlocked')
            
            submit.type = 'button'
            
            submitA.href = './vagas.php'
            
            document.getElementById('enviar').setAttribute('onclick', '')


        }
    }

    function proximo() {
        
        document.location = './criarVagas_requisitos.php'

    }