

const helpIcon = document.querySelectorAll('.helpIcon')
    for (let index = 0; index < helpIcon.length; index++) {
        const element = helpIcon[index];
            element.addEventListener('mouseover', ()=>{
                //     console.log('passou o mouse aki => '+index);
                let drop = document.querySelector(`.helpDropDown_${index}`)
                    drop.style.display = 'flex'
                        
            })
                    // 
                    // 
                    // 
            element.addEventListener('mouseout', ()=>{
                //     console.log('Saiu => '+index);
                 let drop = document.querySelector(`.helpDropDown_${index}`)
                    drop.style.display = 'none'
                        
            })
        
    }


    const helps = document.querySelectorAll('help')
        console.log(helps);