const boton = document.querySelector('#boton');
const menu = document.querySelector('#menu');
const btn_prin = document.querySelector('#btn-menu-principal');
const menu_prin = document.querySelector('#menu-principal')
boton.addEventListener('click', () => {
    console.log('click')
    menu.classList.toggle('hidden')
})
btn_prin.addEventListener('click', () => {
    menu_prin.classList.toggle('hidden');
}) 
