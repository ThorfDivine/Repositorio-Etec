// 
    //  Script para validação e verificação da data de nascimento do usuário 
// 

    let end = false

    window.addEventListener('keyup', ()=>{
        
        let nascimento
            nascimento = document.querySelector("input[type='date']")

        if (nascimento.value == '') {
            end = false
        }

        if (birthDiv.style.display == 'block' && !end) {

            let nasV
                nasV = false

            let niver
                let niverObj
            let niverAno
                let hoje
            let hojeObj

            let idade_hoje
                idade_hoje = 0



                if (nascimento.value != '') {
                    nasV = true
                }else{
                    nasV = false
                }
            
                if(nasV){
                    validaDate(nasV)
                }


                function validaDate(nasV) {
                    if (nasV) {
                        

                        niver = new Date(nascimento.value)
                        // Validando:
                            niverAno = niver.getFullYear()

                            if((niverAno.toString()).length > 4){
                                nascimento.value = ''
                                    console.log((niverAno.toString()).length)
                                return;
                            }
                                // console.log(niverAno.toString());
                            let validador = 0
                                for (let index = 0; index < (niverAno.toString()).length; index++) {

                                    // Opcional:
                                            //Verifica se a idade incerida irá ser maior que 100 anos ou não__
                                        // if (niverAno.toString()[0] != 0) {
                                        //     if (niverAno.toString()[0] == 1) {
                                        //         if (niverAno.toString()[1] < 9) {
                                        //             alert('insira uma data válida')
                                        //         }else if((niverAno.toString()[1] == 9) && (niverAno.toString()[2] < 5)){
                                        //             alert('insira uma data válida')
                                        //         }
                                        //     }
                                        // }

                                        if (validador != 4 && validador < 4) {
                                            validador++
                                            console.log(validador)
                                        }


                                            // objeto referente a data de nascimento dom usuário:
                                        niverObj = {
                                            dia: (niver.getDate()+1),
                                            mes: (niver.getMonth()+1),
                                            ano: niver.getFullYear()
                                        }
                                            // Fim
                                        
                                        hoje = new Date() // Diz a data de hoje
                                            // objeto referente a data atual
                                        hojeObj = {
                                            dia: hoje.getDate(),
                                            mes: hoje.getMonth(),
                                            ano:  hoje.getFullYear()
                                        }
                                            // Fim
                                                    console.log(`Dia de Hoje: ${hojeObj.dia}/${hojeObj.mes}/${hojeObj.ano}`)
                                                    console.log('===============')
                                                    console.log(`Nascimento: ${niverObj.dia}/${niverObj.mes}/${niverObj.ano}`)
                                                    console.log('   ')
                                }

                                if (validador == 4) {
                                    validarIdade()
                                        console.log(idade_hoje);
                                        // verificação: 'caso a data incerida tenha mais de 100 anos, faça.....'
                                    if (idade_hoje >= 100) {

                                        nascimento.classList.remove('Acept')
                                        nascimento.classList.add('Denai')
                                        alert('Pelo visto você possui mais de 100 anos...')
                                        nascimento.value = ''
                                        alert('Insira uma data valida.')
                                        alert('Caso realmente tenha mais de 100 anos, é sugerível que busque o INSS.')

                                        // Caso não seja maior que 100 anos, é maior que 13 (tem 14 anos)? se sim....
                                    }else if (idade_hoje > 13) {

                                        nascimento.classList.add('Acept') //3px solid green
                                        nascimento.classList.remove('Denai')
                                        end = true
                                        console.log('data válida! Você possui mais de 13 anos!')
                                        console.log('Cadastro pode prosseguir!')
                                                // Inicia uma função para validar a idade do usuário - A idade exata dele.

                                        // Caso a idade não seja maior que 14 anos, verifique se o ano incerido é o mesmo que o este ano. Em caso afirmativo.... 
                                    }else if (niverObj.ano >= hojeObj.ano) {

                                        nascimento.classList.remove('Acept')
                                        nascimento.classList.add('Denai')
                                        alert('Insira uma data válida... Nenhum de nós nasceu ontem!')
                                        nascimento.value = ''

                                        // Caso nenhuma das opções sejam verdadeiras, o usuário é novo de mais! Avise.
                                    }else{
                                        nascimento.classList.remove('Acept')
                                        nascimento.classList.add('Denai')
                                        alert('Data inválida! Você é novo de mais para se cadastrar (idade minima de 14 anos).')
                                        nascimento.value = ''
                                    }
                                }


                    }else{
                        console.log('insira uma data!');
                    }
                }


                function validarIdade(){

                    if (idade_hoje == 0) {
                        if (niverObj.ano == hojeObj.ano) {
                            idade_hoje = 1
                        } else {
                            idade_hoje = hojeObj.ano - niverObj.ano
                        }


                        if ((hojeObj.mes+1) < niverObj.mes) {
                            idade_hoje--
                        } else if((hojeObj.mes+1) == niverObj.mes){
                            if ((hojeObj.dia+1) < niverObj.dia) {
                                idade_hoje--
                            }
                        }
                    }

                        console.log(`Sua idade: ${idade_hoje}`)

                }
        }
    })