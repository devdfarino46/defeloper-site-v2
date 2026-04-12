import { isValidPhone, isValidTelegram } from "../utils/helpers";

export default () => document.addEventListener('DOMContentLoaded', () => {
    const orderSuccess = document.querySelector<HTMLElement>('.order-success');
    const modalOverlay = document.querySelector<HTMLElement>('.modal-overlay');
    if (!orderSuccess || !modalOverlay) return;

    let successOpened = false;

    const setError = (contactForm: HTMLFormElement, error = '') => {
        const errorElem = contactForm.querySelector<HTMLElement>('.contact-form__error');
        if (!errorElem) return;

        errorElem.textContent = error;
    }

    const loading = (contactForm: HTMLFormElement, loading?: boolean): null | boolean => {
        const submitBtn = contactForm.querySelector('.contact-form__submit-btn');
        if (!submitBtn) return null;

        if (loading === undefined) {
            return submitBtn.classList.contains('--loading');
        }

        if (loading === true) {
            submitBtn.classList.add('--loading');
        } else if (loading === false) {
            submitBtn.classList.remove('--loading');
        }

        return loading;
    }

    const showSuccess = (text: string) => {
        const textElem = orderSuccess.querySelector('.order-success__text');
        if (!textElem) return;
        
        textElem.innerHTML = text;

        window.dispatchEvent(new CustomEvent('MyCloseModals'));
        modalOverlay.classList.add('--show');
        orderSuccess.classList.add('--show');
        successOpened = true;
    }

    const closeSuccess = () => {
        modalOverlay.classList.remove('--show');
        orderSuccess.classList.remove('--show');
        successOpened = false;
        window.location.replace('/');
    }

    document.addEventListener('click', ev => {
        if (    successOpened && (
                modalOverlay.contains(ev.target as Element) || 
                (ev.target as Element).closest('.order-success__close-btn')
        ) ) {
            closeSuccess();
        }
    });

    document.querySelectorAll<HTMLFormElement>('.contact-form').forEach(contactForm => {
        
        contactForm.addEventListener('submit', ev => {
            ev.preventDefault();

            // if (loading(contactForm)) return;

            const formData = new FormData(contactForm);

            const body = {
                nonce: (formData.get('nonce') as string),
                name: (formData.get('name') as string),
                phone: (formData.get('phone') as string),
                service: (formData.get('service') as string)
            }

            setError(contactForm, '');
            loading(contactForm, true);

            if (body.phone.length <= 0) {
                setError(contactForm, 'Введите телефон или Telegram-ник');
                loading(contactForm, false);
                return;
            }
            
            if (!isValidTelegram(body.phone) && !isValidPhone(body.phone)) {
                setError(contactForm, 'Некорректный телефон или Telegram-ник');
                loading(contactForm, false);
                return;
            }

            fetch('/wp-admin/admin-ajax.php?action=order', {
                method: 'POST',
                body: new URLSearchParams(body)
            })
                .then(res => {
                    if (!res.ok) throw Error('Response not ok');
                    return res.json();
                })
                .then(json => {
                    if (json.success) {
                        showSuccess(json.data);
                    } else {
                        throw Error(json.data);
                    }
                })
                .catch(error => {
                    setError(contactForm, error.message);
                })
                .finally(() => {
                    loading(contactForm, false);
                })
        })
    });
});