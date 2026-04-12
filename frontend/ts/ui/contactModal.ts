import { SelectSetValue, SelectUnselect } from "./select";

export default () => document.addEventListener('DOMContentLoaded', () => {
    const contactModal = document.querySelector<HTMLElement>('.contact-modal');
    const modalOverlay = document.querySelector<HTMLElement>('.modal-overlay');
    if (!contactModal || !modalOverlay) return;

    let opened = false

    const open = function(btn: HTMLElement) {
        const select = contactModal.querySelector<HTMLElement>('.select');

        contactModal.classList.add('--show');
        modalOverlay.classList.add('--show');
        opened = true;

        if (select && btn.dataset.service) {
            SelectSetValue(select, btn.dataset.service);
        }
    }

    const close = function() {
        const select = contactModal.querySelector<HTMLElement>('.select');
        
        contactModal.classList.remove('--show');
        modalOverlay.classList.remove('--show');
        opened = false;

        if (select) {
            SelectUnselect(select);
        }
    }

    document.addEventListener('click', ev => {
        const openBtn = (ev.target as Element).closest<HTMLElement>('.actionOpenContactModal');
        if (openBtn) {
            open(openBtn);
        }

        else if (opened && (ev.target as Element).closest('.contact-modal__close')) {
            close();
        }

        else if (opened && modalOverlay.contains((ev.target as Element))) {
            close();
        }
    });

    document.addEventListener('keydown', ev => {
        if (opened && ev.key === "Escape") {
            close();
        }
    });

    window.addEventListener('MyCloseModals', ((ev: CustomEvent) => {
        close();
    }) as EventListener);
});