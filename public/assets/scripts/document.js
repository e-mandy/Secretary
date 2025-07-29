let add_doc = document.querySelector('.add_doc')

let popup_doc = document.querySelector('.popup_add_doc')

let overlay = document.querySelector('.overlay')

add_doc.addEventListener('click', ()=>{
    popup_doc.classList.remove('hidden')
    overlay.classList.remove('hidden')
})

overlay.addEventListener('click', ()=>{
    overlay.classList.add('hidden')
    popup_doc.classList.add('hidden')
})