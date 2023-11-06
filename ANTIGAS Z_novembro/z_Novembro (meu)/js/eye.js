
let eye
    eye = document.querySelector('#eye')

    eye.addEventListener('click', ()=>{

        eye.innerHTML == 'visibility_off' ? eye.innerHTML = 'visibility' : eye.innerHTML = 'visibility_off';

        pass.type == 'password' ? pass.type = 'text' : pass.type = 'password';

    })

