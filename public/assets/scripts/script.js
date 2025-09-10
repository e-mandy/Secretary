const voirButtons = document.querySelectorAll('.voirButton')
console.log(voirButtons)
const optionsPopup = document.querySelectorAll('.optionsPopup')

voirButtons.forEach(voirButton => {
    voirButton.addEventListener('click', ()=>{
        optionsPopup.forEach(optionPopup =>{
            optionPopup.classList.toggle('hidden')
        })
    })
})
