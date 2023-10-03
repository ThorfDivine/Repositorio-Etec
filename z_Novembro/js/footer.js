let p
    p = '<p>'
let endP
    endP = '</p>'
let direitos
    direitos = 'Direitos de uso: <a href="./direitos.html"> Here! </a>'

    
document.querySelector('footer').innerHTML = `<div class="flexC">${p}<strong>bartoHelp</strong> <sup class="LowRem">©</sup> <i> since 2023</i>${endP}</div>  <div class="flexC LowRem">${p}Telefone: +55 11 9999-9999${endP} ${p} Email: PRGdelta@gmail.com ${endP} ${p} ${direitos} ${endP} </div>`
