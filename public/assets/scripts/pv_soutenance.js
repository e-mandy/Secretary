let add_pv_soutenance = document.querySelector('.add_pv_soutenance')

let popup_pv_soutenance = document.querySelector('.popup_add_pv_soutenance')

let overlay = document.querySelector('.overlay')

add_pv_soutenance.addEventListener('click', ()=>{
    popup_pv_soutenance.classList.remove('hidden')
    overlay.classList.remove('hidden')
})

overlay.addEventListener('click', ()=>{
    overlay.classList.add('hidden')
    popup_pv_soutenance.classList.add('hidden')
})
