// let vagas
//     vagas = document.querySelectorAll('.cardVaga')

let delet
    delet = document.querySelectorAll('.lixeira')
        for (let index = 0; index < delet.length; index++) {
            const element = delet[index];
                element.addEventListener('click', (e)=>{
                    quest(e)
                })
        }

let answer
    answer == ''

function quest(e) {
    
    let answer = window.prompt('Certeza que deseja deletar? \n (Digite "sim" para confirmar)', 'não')
        if (answer != '' && answer != undefined) {
            answer = answer.toLowerCase()
        }

    if (answer == '') {
        quest(e)
    }else if(answer == 'sim'){
        alert('você optou por deletar')
            // O programa deverá retirar o card (tanto da tela quanto do servidor
           //                                   - caso esteja em análize, o programa deverá alertar a desistencia)

           if (document.title == 'BartoHelp - Empresa') {
            var card
            card = e.target.parentElement.parentElement.parentElement
           }else{
            var card
            card = e.target.parentElement.parentElement.parentElement.parentElement
           }
                
            card.style.display = 'none'

            // card.style.display = 'none'
    }else{
        alert('você optou por manter')
    }

}