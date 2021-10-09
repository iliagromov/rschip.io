const btnHeaderNavBurgerMenu = document.querySelector('.headerNavBurgerMenu');
const menu = document.querySelector('.menu');
btnHeaderNavBurgerMenu.addEventListener('click',()=>{
    menu.classList.add('.active');
});