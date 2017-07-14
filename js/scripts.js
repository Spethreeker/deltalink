function showMenu() {
    let burger = document.getElementById('navbar-burger');
    let menu = document.getElementById('navbar-menu');
    if (burger.classList.contains('is-active')) {
        burger.classList.remove('is-active');
        menu.classList.remove('is-active');
    } else {
        burger.classList.add('is-active');
        menu.classList.add('is-active');
    }
}