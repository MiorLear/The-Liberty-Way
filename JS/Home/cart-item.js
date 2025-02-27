
// ---------- RESPONSIVE | SideCart ----------
const OpenCart1 = document.querySelector('#cartSideBar--1');
const CloseCart1 = document.querySelector('.fa-window-close');

const CartOverlay1 = document.querySelector('.cart-overlay');
const Cart1 = document.querySelector('.cart');

OpenCart1.addEventListener('click', function (e) {
    Cart1.classList.add('showCart');
    CartOverlay1.classList.add('transparentBcg');
});

CloseCart1.addEventListener('click', function (e) {
    Cart1.classList.remove('showCart');
    CartOverlay1.classList.remove('transparentBcg');
})
// -------------------------------------------



// ------------ NORMAL | SideCart ------------
const OpenCart2 = document.querySelector('#cartSideBar--2');
const CloseCart2 = document.querySelector('.fa-window-close');

const CartOverlay2 = document.querySelector('.cart-overlay');
const Cart2 = document.querySelector('.cart');

OpenCart2.addEventListener('click', function (e) {
    Cart2.classList.add('showCart');
    CartOverlay2.classList.add('transparentBcg');
});

CloseCart2.addEventListener('click', function (e) {
    Cart2.classList.remove('showCart');
    CartOverlay2.classList.remove('transparentBcg');
})
// -------------------------------------------
