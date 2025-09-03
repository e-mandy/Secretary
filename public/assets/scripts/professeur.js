const add_prof = document.querySelector('.add_prof')
const popup_prof = document.querySelector('.popup_add_prof')
const overlay = document.querySelector('.overlay')

const layoutIcon = document.querySelector('.layoutIcon')
const layoutSide = document.querySelector('.layoutSide')

const groupIcon = document.querySelector('.groupIcon')
const groupSide = document.querySelector('.groupSide')

add_prof.addEventListener('click', ()=>{
    popup_prof.classList.remove('hidden')
    overlay.classList.remove('hidden')
})

layoutIcon.addEventListener('click', ()=>{
    layoutIcon.classList.add('bg-black')
    groupIcon.classList.remove('bg-black')
    layoutSide.classList.add('grid')
    layoutSide.classList.remove('hidden')
    groupSide.classList.add('hidden')
})

groupIcon.addEventListener('click', ()=>{
    groupIcon.classList.add('bg-black')
    layoutIcon.classList.remove('bg-black')
    layoutSide.classList.add('hidden')
    layoutSide.classList.remove('grid')
    groupSide.classList.remove('hidden')
    groupSide.classList.add('block')
})
