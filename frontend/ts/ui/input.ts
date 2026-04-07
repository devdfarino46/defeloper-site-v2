export default () => document.addEventListener('DOMContentLoaded', () => {
    
    const clear = function(input: HTMLElement) {
        const inputElem = input.querySelector<HTMLInputElement>('input');
        if (!inputElem) return;

        inputElem.value = "";
        inputElem.dispatchEvent(new Event('input', { bubbles: true }));
    }

    document.addEventListener('pointerdown', ev => {
        const target = ev.target as Element;
        const input = target.closest<HTMLElement>('.input');
        if (input && target.closest('.icon-close')) {
            ev.preventDefault();
        }
    });

    document.addEventListener('click', ev => {
        const target = ev.target as Element;
        const input = target.closest<HTMLElement>('.input');
        if (input && target.closest('.icon-close')) {
            clear(input);
        }
    });
});