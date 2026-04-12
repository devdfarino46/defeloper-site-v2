export function isElementInViewport(
    element: HTMLElement,
    partial: boolean = true
): boolean{
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    const windowWidth = window.innerWidth;

    if (partial) {
        return  rect.bottom > 0 && rect.top < windowHeight && 
                rect.right > 0 && rect.left < windowWidth;
    }

    return  rect.top >= 0 && rect.left >= 0 &&
            rect.bottom <= windowHeight && rect.right <= windowWidth;
}

export function isElementInViewportRAF({
    elements,
    partial = true,
    delay = 100,
    onlyVisibled = false,
    isRunning = true,
    firstCallback = () => {},
    callback = () => {},
}: {
    elements: HTMLElement | HTMLElement[],
    partial?: boolean,
    delay?: number,
    onlyVisibled?: boolean,
    isRunning?: boolean,
    firstCallback?: (elements: HTMLElement[]) => void,
    callback?: (element: HTMLElement, isVisible: boolean) => void,
}) {
    const elementsArray = Array.isArray(elements) ? elements : [elements];
    let ticking = false;
    let timeoutId: ReturnType<typeof setTimeout>;

    const checkAll = () => {
        firstCallback(elementsArray);

        if (onlyVisibled) {

            for (let el of elementsArray) {
                if (isElementInViewport(el, partial)) {
                    callback(el, true);
                    break;
                }
            }
        } else {
            elementsArray.forEach(el => {
                callback(el, isElementInViewport(el, partial));
            });
        }
    }

    const throttledCheck = () => {
        if (!isRunning) return;
        if (timeoutId) clearTimeout(timeoutId);

        timeoutId = setTimeout(() => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    checkAll();
                    ticking = false;
                });
                ticking = true;
            }
        }, delay);
    }

    if (isRunning) {
        checkAll();
    }

    window.addEventListener('scroll', throttledCheck);
}

export function isValidTelegram(username: string) {
    return /^@[a-zA-Z0-9_]{5,32}$/.test(username);
}

export function isValidPhone(phone: string) {
    const cleanPhone = phone.replace(/[^\d+]/g, '');
    return /^\+\d{10,15}$/.test(cleanPhone);
}