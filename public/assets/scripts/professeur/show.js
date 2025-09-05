const onglets = document.querySelectorAll('.onglets li')

const contains = document.querySelectorAll('.contains')


onglets.forEach(onglet => {
    onglet.addEventListener('click', ()=>{
        onglets.forEach(one_of_onglet => {
            if(one_of_onglet.id != onglet.id && one_of_onglet.classList.contains('is_active')){
                one_of_onglet.classList.remove('is_active')
            }else{
                if(!one_of_onglet.classList.contains('is_active')){
                    one_of_onglet.classList.add('is_active')
                }
            }
        })

        contains.forEach(contain => {
            switch(contain.id){
                case "infos":
                    if(onglet.id == "informations"){
                        contain.classList.remove('hidden')
                        !contain.classList.contains('flex') ? contain.classList.add('flex') : ""
                    }else{
                        contain.classList.contains('flex') ? contain.classList.remove('flex') : ""
                        !contain.classList.contains('hidden') ? contain.classList.add('hidden') : ""
                    }
                    break

                case "docs":
                    if(onglet.id == "documents"){
                        contain.classList.remove('hidden')
                        !contain.classList.contains('block') ? contain.classList.add('block') : ""
                    }else{
                        contain.classList.contains('block') ? contain.classList.remove('block') : ""
                        !contain.classList.contains('hidden') ? contain.classList.add('hidden') : ""
                    }
                    break
            }
        })
    })
});

