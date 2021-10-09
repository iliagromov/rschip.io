const btnHeaderNavBurgerMenu = document.querySelector('.headerNavBurgerMenu');
const btnMenuClose = document.querySelector('.menuClose');

const menu = document.querySelector('.menu');


[btnHeaderNavBurgerMenu, btnMenuClose].forEach(function (element) {
    element.addEventListener("click", function () {
        menu.classList.toggle('active');
        document.querySelector('body').classList.toggle('isMenuShow');
    });
});