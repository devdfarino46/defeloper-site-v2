export default () => document.addEventListener('DOMContentLoaded', () => {
    const faq = document.querySelector<HTMLElement>('.faq');
    if (!faq) return;

    const toggleDropdown = function(items: NodeListOf<HTMLElement>) {
        items.forEach(item => {
            const dropdown = item.querySelector<HTMLElement>('.faq-item__dropdown');
            if (!dropdown) return;

            if (item.classList.contains('--active')) {
                dropdown.style.maxHeight = dropdown.scrollHeight+"px";
            } else {
                dropdown.style.maxHeight = "0px";
            }
        });
    }

    const toggleOpen = function(item: HTMLElement) {
        const allItems = faq.querySelectorAll<HTMLElement>('.faq-item');

        allItems.forEach(el => {
            if (item === el) {
                el.classList.toggle('--active');
            } else {
                el.classList.remove('--active');
            }
        });

        toggleDropdown(allItems);
    }

    
    toggleDropdown(faq.querySelectorAll<HTMLElement>('.faq-item'));

    faq.addEventListener('click', ev => {
        const target = ev.target as HTMLElement;
        const item = target.closest<HTMLElement>('.faq-item');

        if (item && target.closest('.faq-item__label')) {
            toggleOpen(item);
        }
    });

    faq.addEventListener('keydown', ev => {
        const target = ev.target as Element;
        const item = target.closest<HTMLElement>('.faq-item');
        
        if (item && target.closest('.faq-item__label') && ev.key === "Enter") {
            ev.preventDefault();
            toggleOpen(item);
        }
    });
});