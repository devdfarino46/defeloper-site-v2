document.addEventListener('DOMContentLoaded', () => {
    const mobileMenu = document.querySelector('.mobile-menu');
    if (!mobileMenu) return;

    document.addEventListener('click', ev => {

        if (ev.target.closest('.actionOpenMenu')) {
            toggleMenu();
        }
    });

    function toggleMenu() {
        mobileMenu.classList.toggle('--opened');

        const menuBtns = document.querySelectorAll('.actionOpenMenu');

        if (mobileMenu.classList.contains('--opened')) {
            menuBtns.forEach(el => el.classList.add('--active'));
        } else {
            menuBtns.forEach(el => el.classList.remove('--active'));
        }
    }
});