let user
    user = document.querySelector('#identity')
        // console.log(user)
let pass
    pass = document.querySelector('#pass')
        // console.log(pass)
let bttn
    bttn = document.querySelector('#btn')

let abledUser
    abledUser = false
let abledPass
    abledPass = false

    function check() {
            if (user.value == '') {
            
                user.classList.add('Denai')
                user.focus()
                user.placeholder = 'Campo Requisitado!'
    
            }else{
                user.classList.remove('Denai')
                user.placeholder = 'Seu Nome'
            }

            if (pass.value == '') {
            
                pass.classList.add('Denai')
                pass.focus()
                pass.placeholder = 'Campo Requisitado!'
    
            }else{
                pass.classList.remove('Denai')
                pass.placeholder = '**********'
            }

            enter()

    }

    function enter() {

            if (user.value != '') {
                    abledUser = true
                }else{
                    abledUser = false
                }

            if (pass.value != '') {
                abledPass = true
            }else{
                abledPass = false
            }

            return;
    }

    window.addEventListener('keyup', (e)=>{
        // console.log(user)
        // console.log(user.value)

            // console.log(abledUser)
            // console.log(abledPass)
    // console.log(e)
    
            if (e.key == 'Enter') {
                check()
            }

            enter()


            if (abledUser && abledPass) {
                bttn.classList.remove('btnBlocked')
                bttn.value = 'Entrar'
                bttn.type = 'submit'
            }else{
                bttn.classList.add('btnBlocked')
                bttn.value = '...'
                bttn.type = 'button'
            }
        

    })

        bttn.addEventListener('click', ()=>{
            if (bttn.type == 'button') {
                check()
                alert('Incira seus dados!')
            }
        })
