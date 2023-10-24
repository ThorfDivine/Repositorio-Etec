
const button =  '<span class="material-symbols-outlined"> keyboard_double_arrow_up </span>'
const btn = document.querySelector('#backTop')
      btn.innerHTML = button

    window.addEventListener('scroll', () =>{
        if (window.scrollY <= 50) {
            btn.style.display = 'none'
        }else{
            btn.style.display = 'flex'
        }
    })