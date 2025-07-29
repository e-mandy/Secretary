let add_prof = document.querySelector('.add_prof')

let popup_prof = document.querySelector('.popup_add_prof')

let overlay = document.querySelector('.overlay')

add_prof.addEventListener('click', ()=>{
    popup_prof.classList.remove('hidden')
    overlay.classList.remove('hidden')
})

overlay.addEventListener('click', ()=>{
    overlay.classList.add('hidden')
    popup_prof.classList.add('hidden')
})