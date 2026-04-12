import { isElementInViewportRAF } from "../utils/helpers";

export default () => document.addEventListener('DOMContentLoaded', () => {
    const headerNavs = document.querySelectorAll<HTMLElement>('.header .header__nav .nav-link[data-section]');
    const sections = document.querySelectorAll<HTMLElement>('.section[data-section]');

    isElementInViewportRAF({
        elements: Array.from(sections),
        onlyVisibled: true,
        isRunning: window.innerWidth > 1024,
        firstCallback: () => {
            headerNavs.forEach(el => el.classList.remove('--active'));
        },
        callback: (element) => {
            const findetNav = Array.from(headerNavs).find(el => el.dataset.section === element.dataset.section);

            if (findetNav) {
                findetNav.classList.add('--active');
            }
        }
    });
});