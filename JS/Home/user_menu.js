
// ---------- RESPONSIVE | UserMenu ----------
document.addEventListener('mousedown', function(event) {
    const toggleMenu = document.querySelector('#userMenu--1');
    const targetElement = event.target;

    if (!toggleMenu.contains(targetElement) && targetElement !== document.querySelector('.media')) {
        toggleMenu.classList.remove('active');
    }
});

function menuToggle1() {
    const toggleMenu = document.querySelector('#userMenu--1');
    toggleMenu.classList.toggle('active');
}
// -------------------------------------------



// ------------ NORMAL | UserMenu ------------
document.addEventListener('mousedown', function(event) {
    const toggleMenu = document.querySelector('#userMenu--2');
    const targetElement = event.target;

    if (!toggleMenu.contains(targetElement) && targetElement !== document.querySelector('.media')) {
        toggleMenu.classList.remove('active');
    }
});

function menuToggle2() {
    const toggleMenu = document.querySelector('#userMenu--2');
    toggleMenu.classList.toggle('active');
}
// -------------------------------------------
