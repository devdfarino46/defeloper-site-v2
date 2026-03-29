module.exports = function () {
    const mobileMenu = document.querySelector<HTMLElement>('.mobile-menu');
    if (!mobileMenu) return;

    document.addEventListener('click', ev => {

        if ((ev.target as HTMLElement).closest('.actionOpenMenu')) {
            toggleMenu(mobileMenu);
        }
    });
}

function toggleMenu(mobileMenu: HTMLElement) {
    mobileMenu.classList.toggle('--opened');

    const menuBtns = document.querySelectorAll('.actionOpenMenu');

    if (mobileMenu.classList.contains('--opened')) {
        menuBtns.forEach(el => el.classList.add('--active'));
    } else {
        menuBtns.forEach(el => el.classList.remove('--active'));
    }
}