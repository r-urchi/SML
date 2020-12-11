let enlacesHeader = document.querySelector('.enlaces-mobile');

document.querySelector('.hamburguer').addEventListener('click', function(){
    enlacesHeader.classList.toggle('menuDos');
})

window.addEventListener('scroll', function(){
    enlacesHeader.classList.remove('menuDos')
})

document.querySelector('.enlaces-mobile').addEventListener('click', function(){
    enlacesHeader.classList.remove('menuDos')
})

