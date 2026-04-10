export default () => document.addEventListener('DOMContentLoaded', () => {
    const mobileMenu = document.querySelector<HTMLElement>('.mobile-menu');
    if (!mobileMenu) return;

    const toggleMenu = function(open: true | false | 'toggle' = 'toggle') {
        if (open === 'toggle') {
            mobileMenu.classList.toggle('--opened');
        } else if (open === true) {
            mobileMenu.classList.add('--opened');
        } else {
            mobileMenu.classList.remove('--opened');
        }

        const menuBtns = document.querySelectorAll('.actionOpenMenu');

        if (mobileMenu.classList.contains('--opened')) {
            menuBtns.forEach(el => el.classList.add('--active'));
        } else {
            menuBtns.forEach(el => el.classList.remove('--active'));
        }
    }

    document.addEventListener('click', ev => {

        if ((ev.target as HTMLElement).closest('.actionOpenMenu')) {
            toggleMenu();
        }
    });

    mobileMenu.addEventListener('click', ev => {
        if ((ev.target as Element).closest('a')) {
            toggleMenu(false);
        }
    });
});