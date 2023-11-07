
// janela:
    const popup = document.querySelector('popup')

// botões:
    const drop  = document.querySelector('#colse')
    const edit  = document.querySelector('#editar')

// span funcional:
    const olho  = document.querySelector('#eye')
    const close = document.querySelector('#close')

// Textarea:
    let textAr  = document.querySelector('textarea')

// inputs:
    let querry  = popup.querySelectorAll('input')
    let passes  = popup.querySelectorAll('.senhas')

// valores:
    let values = []
        //Colocando os valores
        incert()
            function incert (){
                for (let index = 0; index < querry.length; index++) {
                    const element = querry[index];
                        if (element.type != 'button' && element.type != 'submit' && element.id != 'search' && element.value != '') {
                            values.push(element.value)
                        }
                }
                values.push(textAr.value)
            }

// Booleans:
    let cheio   = false
    let iguais  = false
    let strPas  = false

//confirmações:
    let howMtch = 0


// Funções a realizar: 
    var ok
        ok = function (e) {

            console.log(e);

            if (e.key == 'Escape') {
                popup.style.display = 'none'
                    console.clear()
                    window.removeEventListener('keyup',ok)
            }

            howMtch = 0
            cheio = false

            for (let index = 0; index < querry.length; index++) {
                const element = querry[index];
                
                if (element.type != 'button' && element.id != 'search' && element.type != 'submit') {
                    // console.log(element);
                    if (element.value != '') {
                        howMtch++
                    }
                }
            }

            check_pass()
                console.log( 'strPas: ', strPas);


            // console.log('hllo');

            if (howMtch >= 8) {
                cheio = true
            }
        }


        function check_pass(){
            const pass1 = passes[0];
            const pass2 = passes[1];

        console.log('Entrei');            

            if (pass1.value == pass2.value && pass1.value != '') {

                pass1.classList.remove('Denai')
                pass2.classList.remove('Denai')

                console.log('true: ', true);
                strPas = true
                return;
            }else{
                
                pass1.classList.add('Denai')
                pass2.classList.add('Denai')
                
                console.log('false: ', false);
                strPas = false
                return;
            }

        }

    // Fechando tela de edição
        popup.style.display = 'none' // fim
    

// Adicionando ouvinte no "botão" de editar
    edit.addEventListener('click', ()=>{
        popup.style.display = 'flex'
        window.addEventListener('keyup',ok)
    })//fim

// Adicionando ouvinte no "botão" de fechar
    close.addEventListener('click', ()=>{
        popup.style.display = 'none'
        console.clear()
            window.removeEventListener('keyup',ok)
    })//fim
    


// Mostrar senhas:

var senhas = function (){
    if (olho.innerHTML == 'visibility') {
        olho.innerHTML = 'visibility_off'
        for (let index = 0; index < passes.length; index++) {
            const element = passes[index];
            element.type = 'password'
        }
    }else{
        olho.innerHTML = 'visibility'
        for (let index = 0; index < passes.length; index++) {
            const element = passes[index];
                element.type = 'text'
        }
    }
}
    olho.addEventListener('click', senhas)
