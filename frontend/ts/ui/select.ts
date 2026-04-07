export default () => document.addEventListener('DOMContentLoaded', () => {

    let selectOpened: HTMLElement | null = null;

    const setValue = function(select: HTMLElement, option: HTMLElement) {
        const inputElem = select.querySelector<HTMLInputElement>('input');
        const buttonValue = select.querySelector<HTMLElement>('.select__button span');
        if (!inputElem || !buttonValue) return;

        const value = option.textContent;
        const dataValue = option.dataset.value || "";

        inputElem.value = dataValue.length <= 0 ? value : dataValue;
        buttonValue.textContent = value;
        inputElem.dispatchEvent(new Event('input', {bubbles: true}));
    }

    const open = function(select: HTMLElement, toggle = false) {
        if (toggle) {
            select.classList.toggle('--active');
        } else {
            select.classList.add('--active');
        }

        if (select.classList.contains('--active')) {
            selectOpened = select;
        } else {
            selectOpened = null;
        }
    }

    const close = function(select: HTMLElement) {
        select.classList.remove('--active');
        selectOpened = null;
    }

    const getHoveredOption = function(select: HTMLElement) {
        return select.querySelector<HTMLElement>('.select__option.--hover');
    }

    const moveSelectOption = function(select: HTMLElement, direction: "up" | "down") {
        const options = select.querySelectorAll<HTMLElement>('.select__option');
        if (options.length <= 0) return;

        const currentHovered = getHoveredOption(select);
        let currentIndex = -1;

        if (currentHovered) {
            currentIndex = Array.from(options).indexOf(currentHovered)
        }

        let nextIndex: number;
        if (direction === 'down') {
            nextIndex = currentIndex + 1;
            if (nextIndex >= options.length) {
                nextIndex = 0;
            }
        } else {
            nextIndex = currentIndex - 1;
            if (nextIndex < 0) {
                nextIndex = options.length - 1;
            }
        }

        options.forEach(opt => opt.classList.remove('--hover'));

        const nextOption = options[nextIndex];
        nextOption.classList.add('--hover');

        const optionsContainer = select.querySelector<HTMLElement>('.select__options');
        if (optionsContainer) {
            const optionRect = nextOption.getBoundingClientRect();
            const containerRect = optionsContainer.getBoundingClientRect();

            if (optionRect.bottom > containerRect.bottom) {
                optionsContainer.scrollTop += optionRect.bottom - containerRect.bottom;
            } else if (optionRect.top < containerRect.top) {
                optionsContainer.scrollTop -= containerRect.top - optionRect.top;
            }
        }
    }

    const setHoverOption = function(select: HTMLElement, option: HTMLElement) {
        const options = select.querySelectorAll('.select__option');
        options.forEach(opt => opt.classList.remove('--hover'));
        option.classList.add('--hover');
    }

    const setValueFromHoveredOption = function(select: HTMLElement) {
        const hoveredOption = getHoveredOption(select);
        
        if (hoveredOption) {
            setValue(select, hoveredOption);
        }
    }

    document.addEventListener('pointerdown', ev => {
        const target = ev.target as Element;

        if (target.closest('.select .select__options')) {
            ev.preventDefault();
        }
    });

    document.addEventListener('click', ev => {
        const target = ev.target as Element;

        const select = target.closest<HTMLElement>('.select');
        const option = target.closest<HTMLElement>('.select__option');

        if (select && target.closest('.select__button')) {
            open(select, true);
        }

        else if (select && option) {
            ev.preventDefault();
            setValue(select, option);
            setHoverOption(select, option);
            close(select);
        }

        else if (selectOpened) {
            close(selectOpened);
        }
    });

    document.addEventListener('keydown', ev => {
        const target = ev.target as Element;

        const select = target.closest<HTMLElement>('.select');
        const button = target.closest<HTMLElement>('.select__button');

        if (select && button && ev.key === 'Enter') {
            ev.preventDefault();

            if (selectOpened) {
                setValueFromHoveredOption(selectOpened);
                close(select);
            } else {
                open(select);
            }
        }

        else if (selectOpened && button && ev.key === "ArrowDown") {
            ev.preventDefault();
            moveSelectOption(selectOpened, 'down');
        }

        else if (selectOpened && button && ev.key === 'ArrowUp') {
            ev.preventDefault();
            moveSelectOption(selectOpened, 'up');
        }
    });

    document.addEventListener('focusout', ev => {
        if (selectOpened && selectOpened.contains(ev.target as Element)) {
            close(selectOpened);
        }
    });
});

export function SelectSetValue(select: HTMLElement, value: string) {
    const inputElem = select.querySelector<HTMLInputElement>('input');
    const buttonValue = select.querySelector<HTMLElement>('.select__button span');
    const options = select.querySelectorAll<HTMLElement>('.select__option');
    const findetOption = Array.from(options).find(opt => opt.textContent === value);
    if (!inputElem || !buttonValue || options.length <= 0 || !findetOption) return;

    const dataValue = findetOption.dataset.value || "";

    options.forEach(opt => opt.classList.remove('--hover'));
    findetOption.classList.add('--hover');

    inputElem.value = dataValue.length <= 0 ? value : dataValue;
    buttonValue.textContent = value;
    inputElem.dispatchEvent(new Event('input', {bubbles: true}));
}

export function SelectUnselect(select: HTMLElement) {
    const inputElem = select.querySelector<HTMLInputElement>('input');
    const buttonValue = select.querySelector<HTMLElement>('.select__button span');
    const options = select.querySelectorAll<HTMLElement>('.select__option');
    if (!inputElem || !buttonValue || options.length <= 0) return;

    const dataValue = options[0].dataset.value || "";

    options.forEach(opt => opt.classList.remove('--hover'));

    inputElem.value = dataValue.length <= 0 ? options[0].textContent : dataValue;
    buttonValue.textContent = options[0].textContent;
    inputElem.dispatchEvent(new Event('input', {bubbles: true}));
}