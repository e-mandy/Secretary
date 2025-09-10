const voirButtons = document.querySelectorAll('.voirButton')


voirButtons.forEach(voirButton => {
    voirButton.addEventListener('click', ()=>{
        const popup = voirButton.querySelector('.optionsPopup')
        popup.classList.toggle('hidden')
    })
})
