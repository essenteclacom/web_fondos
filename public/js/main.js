// JavaScript
document.addEventListener('DOMContentLoaded', function () {
    const allInforms = document.getElementById('all-informs')
    allInforms.addEventListener('click', (e) => {
        e.stopPropagation()
        const menu = document.getElementById('menu')
        const space = document.getElementById('space')
        const hidden = space.classList.contains('hidden')
        menu.classList.toggle('hidden')
        space.classList.add('hidden')
        if(hidden){
            space.classList.toggle('hidden')
        }
        else{
            space.classList.add('hidden')
        }
    })

    const submenus = document.querySelectorAll('.submenu')
    submenus.forEach((submenu) => {
        submenu.addEventListener('click', (e) => {
            console.log('2')
            e.stopPropagation()
            const listas = document.querySelectorAll('.list')
            for (var i = 0; i < listas.length; i++) {
                listas[i].classList.add('hidden')
            }
            const finalmenuid = submenu.id
            console.log(finalmenuid)
            const lista = document.getElementById('lista-' + finalmenuid) 
            const hidden = lista.classList.contains('hidden')
            if(hidden){
                lista.classList.toggle('hidden')
            }
        })
    })
})